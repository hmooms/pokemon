<?php

class Attack
{
    public $name;
    public $damage;
    public $energyType;

    public function __construct($name, $damage, $energyType)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->energyType = $energyType;
    }
}