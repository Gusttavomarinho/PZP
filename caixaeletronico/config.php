<?php
//fazendo conexao com o BD
try {
    $pdo = new PDO("mysql:dbname=pzp_caixaeletronico;host=localhost","root","root");

} catch (PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
