<?php

//Codigo trabalhando com constantes
define("URL","http://www.meusite.com.br");
define("VERSION","1.0");

echo "Meu site e:".URL." "."e sua versao e:".VERSION;

//praticando if e else na sintaxe php
$nome = "Gustavo";
$idade = 90;

// && = AND
// || = OR

if($nome == "Gustavo" && $idade == 90){
	echo "Meu nome esta correto e minha idade tambem!";
}else{
	echo "Meu nome esta errado!";
}
?>