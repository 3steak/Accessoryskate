<?php

namespace Tutoriel;


require 'class/Autoloader.php';
Autoloader::register();




$harry = new Personnage('Harry');

$legolas = new Archer('Legolas');

$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);
