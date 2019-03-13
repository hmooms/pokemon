<?php

class EnergyType
{
    public $weakness;
    public $resistance;
    public $multipier;
    public $resistanceValue;

    public function __construct($weakness, $resistance, $multipier, $resistanceValue)
    {
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->multiplier = $multipier;
        $this->resistanceValue = $resistanceValue;
    }
}