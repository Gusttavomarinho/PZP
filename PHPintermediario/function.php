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

echo "A data daqui a 10 dias é: ".$dataproxima."<br/><br/>";

//funções matematicas do PHP

//abs
echo "função matematica no PHP ABS:".abs(10)."<br/>";
//round
echo "função matematica no PHP ROUND:".round(3.2)."<br/>";
//ceil
echo "função matematica no PHP CEIL:".ceil(2.2)."<br/>";
//floor
echo "função matematica no PHP FLOOR:".floor(2.2)."<br/>";
//rand
echo "função matematica no PHP RAND:".rand(1,100)."<br/>";

//sistema de sorteio basico usando o rand

$pessoas =  array("Gustavo","Fulano","Maria","Seiila");
// de 0 a 3 pois o meu array tem 4 itens que o indice vai de 0 a 3 
$numero_alteatorio = rand(0,3);

echo "O sorteado é: ".$pessoas[$numero_alteatorio]."<br/>";

//funções do PHP para manipulação de string
//http://php.net/explode
//http://php.net/manual/pt_BR/function.implode.php
//http://php.net/number_format
//http://php.net/str_replace
//http://php.net/manual/pt_BR/function.strtolower.php
//http://php.net/manual/pt_BR/function.strtoupper.php
//http://php.net/manual/pt_BR/function.substr.php
//http://php.net/manual/pt_BR/function.ucfirst.php
//http://php.net/manual/pt_BR/function.ucwords.php
$nome = "Gustavo Marinho";

$x = explode(" ",$nome);

print_r($x);
?>