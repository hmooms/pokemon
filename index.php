<?php

require 'init.php';

$pikachu = new Pikachu(new Lightning, [new PikaPunch, new ElectricRing]);

$charmeleon = new Charmeleon(new Fire, [new HeadButt, new Flare]);

echo $pikachu->name . " used " . $pikachu->attacks[0]->name . "!<br>";
$pikachu->attack($charmeleon, $pikachu->attacks[0]);

echo $charmeleon->name . " used " . $charmeleon->attacks[1]->name . "!<br>";
$charmeleon->attack($pikachu, $charmeleon->attacks[1]);