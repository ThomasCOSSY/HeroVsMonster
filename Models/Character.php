<?php

class Character
{
    private $name;
    private $health;
    private $rage;
    private $rageStat;
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;




    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function setHealth($healthValue)
    {
        $this->health = $healthValue;
        return $this->health;
    }

    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set the value of rage
     *
     * @return  self
     */
    public function setRage($rageValue)
    {
        $this->rage = $rageValue;

        return $this;
    }

    /**
     * Get the value of rage
     */
    public function getRage()
    {
        return $this->rage;
    }

    public function setShield($shieldValue)
    {
        $this->shield = $shieldValue;
        return $this->shield;
    }

    public function getShield()
    {
        return $this->shield;
    }

    public function setShieldValue($shieldValueValue)
    {
        $this->shieldValue = $shieldValueValue;
        return $this->shieldValue;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    /**
     * Get the value of rageStat
     */
    public function getrageStat()
    {
        return $this->rageStat;
    }

    /**
     * Set the value of rageStat
     *
     * @return  self
     */
    public function setrageStat($rageStat)
    {
        $this->rageStat = $rageStat;

        return $this;
    }

    public function setWeapon($weaponValue)
    {
        $this->weapon = $weaponValue;
        return $this->weapon;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function setWeaponDamage($weaponDamageValue)
    {
        $this->weaponDamage = $weaponDamageValue;
        return $this->weaponDamage;
    }

    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }














    public function __construct($name, $minHealth, $maxHealth, $rage, $rageStat, $weapon, $minDamage, $maxDamage, $shield, $minShield, $maxShield)
    {
        $this->setName($name);
        $this->hp($minHealth, $maxHealth);
        $this->setRage($rage);
        $this->setrageStat($rageStat);
        $this->setWeapon($weapon);
        $this->attack($minDamage, $maxDamage);
        $this->setShield($shield);
        $this->armor($minShield, $maxShield);
        
    }




    public function hp($minHealth, $maxHealth)
    {
        $this->health = rand($minHealth, $maxHealth);
        
    }

    public function attack($minDamage, $maxDamage)
    {
        $this->weaponDamage = rand($minDamage, $maxDamage);
        
    }

    public function armor($minShield, $maxShield)
    {
        $this->shieldValue = rand($minShield, $maxShield);
        
    }
}
