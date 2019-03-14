<?php

function somarNumero($x,$y){
	$conta  = $x + $y;

	return $conta;
};

function mostrarNome(){
	
	return "Gustavo";
};

$resultado = somarNumero(10,20);

echo "O resultado da soma é: ".$resultado."<br/>";

echo "O meu nome é:	".mostrarNome()."<br/>";


?>