<?php

class Pokemon  
{ 
    protected $energyType;
    protected $hitpoints;
    protected $health;
 
    public $name;
    public $attacks;

    public function __construct($name, $energyType, $hitpoints, $attacks)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
    }

    public function attack($target, $attack)
    {
        $target->attacked($attack);
    }

    public function attacked($attack)
    {
        echo $this->name . " [" . $this->health . "/" . $this->hitpoints . "]<br>";
        $damage = $attack->damage;
        if($this->energyType->weakness == $attack->energyType){
            $damage *= $this->energyType->multiplier;
            echo "It's very effective!<br>";
        } else if($this->energyType->resistance == $attack->energyType) {
            $damage -= $this->energyType->resistanceValue;
            echo "It's not very effective...<br>";
        }
        echo $this->name . " loses " . $damage . " hp!<br>";
        $this->health -= $damage;
        echo $this->name . " [" . $this->health . "/" . $this->hitpoints . "]<br>";
    }
}