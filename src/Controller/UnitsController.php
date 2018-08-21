<?php

namespace App\Controller;

use App\Document\units;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class UnitsController extends Controller {

    use dataCollector;

    /**
     * @Route("/api/getAllUnits-{force}", name="api_getAllUnits")
     */
    public function getUnits($force) {

        $databaseData = $this->get('doctrine_mongodb')
            ->getRepository(units::class)
            ->findBy(["faction" => $force, "factionType" => "unit"]);

        if (!$databaseData) {
            throw $this->createNotFoundException('No Response Found!');
        }

        foreach ($databaseData as $data) {

            array_push($this->unitArray, $data->getId());
        }

        return new JsonResponse(array($force => $this->unitArray));

    }

    /**
     * @Route("/api/getUnit-{force}-{unit}", name="api_getUnit")
     */
    public function getUnit($force, $unit) {

        $databaseData = $this->get('doctrine_mongodb')
            ->getRepository(units::class)
            ->findOneBy(["id" => $unit, "faction" => $force]);

        if (!$databaseData) {
            throw $this->createNotFoundException('No Response Found!');
        }

        // Weapons
        $dataWeapons = $databaseData->getWeapon();

        $weaponValueJSON = json_decode(json_encode($dataWeapons));

        $this->setRangedWeapons($weaponValueJSON->ranged->default,$this->rangedDefault);

        $this->setRangedWeapons($weaponValueJSON->ranged->replacement,$this->rangedReplacement);

        $this->setMeleeWeapons($weaponValueJSON->melee->default,$this->meleeDefault);

        $this->setMeleeWeapons($weaponValueJSON->melee->replacement,$this->meleeReplacement);

        // Abilities
        $dataAbilities = $databaseData->getAbilities();

        $abilitiesValueJSON = json_decode(json_encode($dataAbilities));

        $this->setUnitAbilities($abilitiesValueJSON);

        return new JsonResponse(array($unit => $this->setObject($databaseData)));

    }

    private function setRangedWeapons($rangedValueJSON, &$dest) {

        foreach($rangedValueJSON as $rangedValue) {

            $rangedTmp = UnitsController::findOneBy("id", $rangedValue);

            $this->rangedWeaponAbility = [];

            if ($rangedTmp) {

                if ($rangedTmp->getWeaponAbility()) {

                    foreach($rangedTmp->getWeaponAbility() as $weaponValue) {

                        $weaponAbilitiesTmp = UnitsController::findOneBy("id", $weaponValue);

                        if ($weaponAbilitiesTmp) {
                            $this->rangedWeaponAbility[] = $this->getJSONAbility($weaponAbilitiesTmp);
                        }

                    }

                }

                $dest[] = $this->getRangedWeapon($rangedTmp);

            }

        }

    }

    private function setMeleeWeapons($meleeValueJSON, &$dest) {

        foreach($meleeValueJSON as $meleeValue) {

            $meleeTmp = UnitsController::findOneBy("id", $meleeValue);

            $this->meleeWeaponAbility = [];

            if ($meleeTmp) {

                if ($meleeTmp->getWeaponAbility()) {

                    foreach($meleeTmp->getWeaponAbility() as $weaponValue) {

                        $weaponAbilityTmp = UnitsController::findOneBy("id", $weaponValue);


                        if ($weaponAbilityTmp) {
                            $this->meleeWeaponAbility[] = $this->getJSONAbility($weaponAbilityTmp);
                        }

                    }

                }

                $dest[] = $this->getMeleeWeapon($meleeTmp);

            }

        }

    }

    private function setUnitAbilities($unitAbilityJSON) {

        $this->unitAbility = [];

        foreach($unitAbilityJSON as $abilityValue) {

            $abilityTmp = UnitsController::findOneBy("id", $abilityValue);

            if ($abilityTmp) {
                $this->unitAbility[] = $this->getJSONAbility($abilityTmp);
            }

        }

    }

    private function setObject($databaseData) {
        return array(
            "id" => $databaseData->getId(),
            "faction" => $databaseData->getFaction(),
            "factionType" => $databaseData->getFactionType(),
            "stats" => $databaseData->getStats(),
            "source" => $databaseData->getSource(),
            "points" => $databaseData->getPoints(),
            "count" => $databaseData->getCount(),
            "weapon" => array(
                "ranged" => array(
                    "default" => $this->rangedDefault,
                    "replacement" => $this->rangedReplacement
                ),
                "melee" => array(
                    "default" => $this->meleeDefault,
                    "replacement" => $this->meleeReplacement
                ),
            ),
            "keywords" => $databaseData->getKeywords(),
            "abilities" => $this->unitAbility

        );

    }

    private function findOneBy($key, $value) {
        return $this->get('doctrine_mongodb')
            ->getRepository(units::class)
            ->findOneBy([$key => $value]);
    }

}

?>