<?php

class Pikachu extends Pokemon
{
    public function __construct($energyType, $attacks, $name = 'Pikachu')
    {
        parent::__construct($name, $energyType, 60, $attacks);
    }
}