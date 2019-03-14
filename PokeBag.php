<?php

class PokeBag
{
    public $pokemon = [];

    public function __construct()
    {

    }

    public function addPokemon($pokemon)
    {
        if(sizeof($this->pokemon) <= 10){
            array_push($this->pokemon, $pokemon);
            echo "Added $pokemon->name to the PokeBag,<br>";
        }
        else {
            echo "PokeBag is full.<br>";
        }
    }

    public function removePokemon($pokemon)
    {
        if($pokemon == 'all'){
            $this->pokemon = array();
        } else if($pokemon <= 10){
            array_splice($this->pokemon, 1, $pokemon);
        }
    }

    public function getPokemonNames()
    {
        if(sizeof($this->pokemon) == 1){
            echo "In this PokeBag is " . sizeof($this->pokemon) . " Pokemon:<br>";
        } else{
            echo "In this PokeBag are " . sizeof($this->pokemon) . " Pokemon:<br>";
        }
        foreach($this->pokemon as $poke){
            echo "$poke->name<br>";    
        }
        echo "<br>";
    }
}