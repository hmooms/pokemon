<?php

class Pokemon  
{
    protected $name;
    protected $energyType;
    protected $hitpoints;
    protected $health;
    protected $attacks;



    public function __construct($name)
    {
        $this->name = $name;
    }
} 