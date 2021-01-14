<?php 

//Exemplo de conexao com o banco de dados usando PDO + Mysql
$pdo = new PDO("mysql:dbname=test;host=localhost","root","");

$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll( PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);