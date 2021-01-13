<?php 

require 'classe1.php';
require 'classe2.php';
require 'classes/matematica/basico.php';

$a = new classe1\MinhaClasse();
echo $a->testar();

use classes\matematica\Basico as Basico;

$basico = new Basico();
