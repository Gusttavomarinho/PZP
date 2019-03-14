<?php
//iniciando a aula de como trabalhar e criar funções no PHP

//criando uma função para somar 2 numeros
function somarNumero($x,$y){
	$conta  = $x + $y;

	return $conta;
};
//criando uma função para somente retorna uma string que neste caso e um nome
function mostrarNome(){

	return "Gustavo";
};

//para usar um texto no meio da função a gente usa barra invertida
// link para documentação da função : http://php.net/manual/en/function.date.php
//link em  BR : http://php.net/manual/pt_BR/function.date.php
$dataatual = date("d/m/Y \á\s H:i:s");


//usando as funções criadas
$resultado = somarNumero(10,20);

echo "O resultado da soma é: ".$resultado."<br/>";

echo "O meu nome é:	".mostrarNome()."<br/>";

echo "A data e hora atual é: ".$dataatual."<br/>";



//trabalhando com a função time e mktime , strtotime do PHP
//link para documentação : http://php.net/time e http://php.net/mktime , http://php.net/strtotime

$dataproxima = date("d/m/Y", strtotime("+10 days"));

echo "A data daqui a 10 dias é: ".$dataproxima."<br/>";

?>