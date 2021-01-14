<?php 

//Exemplo de conexao com o banco de dados usando PDO + Mysql
$pdo = new PDO("mysql:dbname=test;host=localhost","root","");

$sql = $pdo->query('SELECT * FROM usuarios');

echo "TOTAL DE REGISTROS: ".$sql->rowCount();

$dados = $sql->fetchAll( PDO::FETCH_ASSOC); //comando PDO::FETCH_ASSOC serve para nao duplicar o array

echo '<pre>';
print_r($dados);

echo '<br/>';



