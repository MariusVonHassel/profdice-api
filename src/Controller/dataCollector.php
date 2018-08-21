<?php

namespace App\Controller;

trait dataCollector {

    private $meleeDefault = [];
    private $meleeReplacement = [];
    private $rangedDefault = [];
    private $rangedReplacement = [];
    private $rangedWeaponAbility = [];
    private $meleeWeaponAbility = [];
    private $unitArray = [];
    private $unitAbility = [];


    /**
     * @return array
     */
    public function getRangedWeapon($rangedTmp) {
        return array(
            "id" => $rangedTmp->getId(),
            "faction" => $rangedTmp->getFaction(),
            "factionType" => $rangedTmp->getFactionType(),
            "weaponType" => $rangedTmp->getWeaponType(),
            "source" => $rangedTmp->getSource(),
            "points" => $rangedTmp->getPoints(),
            "range" => $rangedTmp->getRange(),
            "weaponMode" => $rangedTmp->getWeaponMode(),
            "weaponModeCount" => $rangedTmp->getWeaponModeCount(),
            "S" => $rangedTmp->getS(),
            "AP" => $rangedTmp->getAP(),
            "D" => $rangedTmp->getD(),
            "weaponAbility" => $this->rangedWeaponAbility
        );

    }

    /**
     * @return array
     */
    public function getMeleeWeapon($meleeTmp) {
        return array(
            "id" => $meleeTmp->getId(),
            "faction" => $meleeTmp->getFaction(),
            "factionType" => $meleeTmp->getFactionType(),
            "weaponType" => $meleeTmp->getWeaponType(),
            "source" => $meleeTmp->getSource(),
            "points" => $meleeTmp->getPoints(),
            "range" => $meleeTmp->getRange(),
            "weaponMode" => $meleeTmp->getWeaponMode(),
            "S" => $meleeTmp->getS(),
            "AP" => $meleeTmp->getAP(),
            "D" => $meleeTmp->getD(),
            "weaponAbility" => $this->meleeWeaponAbility
        );
    }

    /**
     * @return array
     */
    public function getJSONAbility($abilityTmp) {
        return array(
            "id" => $abilityTmp->getId(),
            "faction" => $abilityTmp->getFaction(),
            "factionType" => $abilityTmp->getFactionType(),
            "abilityType" => $abilityTmp->getAbilityType(),
            "description" => $abilityTmp->getDescription(),
            "descriptionShort" => $abilityTmp->getDescriptionShort(),
            "source" => $abilityTmp->getSource(),
            "abilityFactors" => $abilityTmp->getAbilityFactors()
        );
    }

}