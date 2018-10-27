<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class units {

    /**
     * @MongoDB\Id(strategy="NONE", type="string")
     */
    protected $id;

    /**
     *
     * Unit
     *
     */

    /**
     * @MongoDB\Field(type="string")
     */
   protected $faction;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $factionType;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $source;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $book;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $page;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $stats;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $M;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $WS;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $BS;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $S;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $T;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $W;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $A;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $Ld;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $Sv;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $points;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $count;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $default;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $max;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $weapon;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $ranged;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $replacement;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $melee;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $keywords;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $abilities;


    /**
     *
     * Weapons
     *
     */
    /**
     * @MongoDB\Field(type="string")
     */
    protected $weaponType;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $range;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $weaponMode;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $weaponModeCount;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $AP;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $D;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $weaponAbility;

    /**
     *
     * Abilities
     *
     */

    /**
     * @MongoDB\Field(type="string")
     */
    protected $abilityType;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $descriptionShort;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $abilityFactors;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * @param mixed $faction
     */
    public function setFaction($faction): void
    {
        $this->faction = $faction;
    }

    /**
     * @return mixed
     */
    public function getFactionType()
    {
        return $this->factionType;
    }

    /**
     * @param mixed $factionType
     */
    public function setFactionType($factionType): void
    {
        $this->factionType = $factionType;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * @param mixed $book
     */
    public function setBook($book): void
    {
        $this->book = $book;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param mixed $stats
     */
    public function setStats($stats): void
    {
        $this->stats = $stats;
    }

    /**
     * @return mixed
     */
    public function getM()
    {
        return $this->M;
    }

    /**
     * @param mixed $M
     */
    public function setM($M): void
    {
        $this->M = $M;
    }

    /**
     * @return mixed
     */
    public function getWS()
    {
        return $this->WS;
    }

    /**
     * @param mixed $WS
     */
    public function setWS($WS): void
    {
        $this->WS = $WS;
    }

    /**
     * @return mixed
     */
    public function getBS()
    {
        return $this->BS;
    }

    /**
     * @param mixed $BS
     */
    public function setBS($BS): void
    {
        $this->BS = $BS;
    }

    /**
     * @return mixed
     */
    public function getS()
    {
        return $this->S;
    }

    /**
     * @param mixed $S
     */
    public function setS($S): void
    {
        $this->S = $S;
    }

    /**
     * @return mixed
     */
    public function getT()
    {
        return $this->T;
    }

    /**
     * @param mixed $T
     */
    public function setT($T): void
    {
        $this->T = $T;
    }

    /**
     * @return mixed
     */
    public function getW()
    {
        return $this->W;
    }

    /**
     * @param mixed $W
     */
    public function setW($W): void
    {
        $this->W = $W;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->A;
    }

    /**
     * @param mixed $A
     */
    public function setA($A): void
    {
        $this->A = $A;
    }

    /**
     * @return mixed
     */
    public function getLd()
    {
        return $this->Ld;
    }

    /**
     * @param mixed $Ld
     */
    public function setLd($Ld): void
    {
        $this->Ld = $Ld;
    }

    /**
     * @return mixed
     */
    public function getSv()
    {
        return $this->Sv;
    }

    /**
     * @param mixed $Sv
     */
    public function setSv($Sv): void
    {
        $this->Sv = $Sv;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points): void
    {
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count): void
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     */
    public function setDefault($default): void
    {
        $this->default = $default;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max): void
    {
        $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param mixed $weapon
     */
    public function setWeapon($weapon): void
    {
        $this->weapon = $weapon;
    }

    /**
     * @return mixed
     */
    public function getRanged()
    {
        return $this->ranged;
    }

    /**
     * @param mixed $ranged
     */
    public function setRanged($ranged): void
    {
        $this->ranged = $ranged;
    }

    /**
     * @return mixed
     */
    public function getReplacement()
    {
        return $this->replacement;
    }

    /**
     * @param mixed $replacement
     */
    public function setReplacement($replacement): void
    {
        $this->replacement = $replacement;
    }

    /**
     * @return mixed
     */
    public function getMelee()
    {
        return $this->melee;
    }

    /**
     * @param mixed $melee
     */
    public function setMelee($melee): void
    {
        $this->melee = $melee;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords): void
    {
        $this->keywords = $keywords;
    }

    /**
     * @return mixed
     */
    public function getAbilities()
    {
        return $this->abilities;
    }

    /**
     * @param mixed $abilities
     */
    public function setAbilities($abilities): void
    {
        $this->abilities = $abilities;
    }

    /**
     * @return mixed
     */
    public function getWeaponType()
    {
        return $this->weaponType;
    }

    /**
     * @param mixed $weaponType
     */
    public function setWeaponType($weaponType): void
    {
        $this->weaponType = $weaponType;
    }

    /**
     * @return mixed
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @param mixed $range
     */
    public function setRange($range): void
    {
        $this->range = $range;
    }

    /**
     * @return mixed
     */
    public function getWeaponMode()
    {
        return $this->weaponMode;
    }

    /**
     * @param mixed $weaponMode
     */
    public function setWeaponMode($weaponMode): void
    {
        $this->weaponMode = $weaponMode;
    }

    /**
     * @return mixed
     */
    public function getWeaponModeCount()
    {
        return $this->weaponModeCount;
    }

    /**
     * @param mixed $weaponModeCount
     */
    public function setWeaponModeCount($weaponModeCount): void
    {
        $this->weaponModeCount = $weaponModeCount;
    }

    /**
     * @return mixed
     */
    public function getAP()
    {
        return $this->AP;
    }

    /**
     * @param mixed $AP
     */
    public function setAP($AP): void
    {
        $this->AP = $AP;
    }

    /**
     * @return mixed
     */
    public function getD()
    {
        return $this->D;
    }

    /**
     * @param mixed $D
     */
    public function setD($D): void
    {
        $this->D = $D;
    }

    /**
     * @return mixed
     */
    public function getWeaponAbility()
    {
        return $this->weaponAbility;
    }

    /**
     * @param mixed $weaponAbility
     */
    public function setWeaponAbility($weaponAbility): void
    {
        $this->weaponAbility = $weaponAbility;
    }

    /**
     * @return mixed
     */
    public function getAbilityType()
    {
        return $this->abilityType;
    }

    /**
     * @param mixed $abilityType
     */
    public function setAbilityType($abilityType): void
    {
        $this->abilityType = $abilityType;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescriptionShort()
    {
        return $this->descriptionShort;
    }

    /**
     * @param mixed $descriptionShort
     */
    public function setDescriptionShort($descriptionShort): void
    {
        $this->descriptionShort = $descriptionShort;
    }

    /**
     * @return mixed
     */
    public function getAbilityFactors()
    {
        return $this->abilityFactors;
    }

    /**
     * @param mixed $abilityFactors
     */
    public function setAbilityFactors($abilityFactors): void
    {
        $this->abilityFactors = $abilityFactors;
    }

}

?>