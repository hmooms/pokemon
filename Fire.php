<?php

class Fire extends EnergyType
{
    public function __construct()
    {
        parent::__construct('Water', 'Lightning', 2, 10);
    }
}