<?php

Class Charmeleon extends Pokemon
{
    public function __construct($energyType, $attacks, $name = 'Charmeleon')
    {
        parent::__construct($name, $energyType, 60, $attacks);
    }
}