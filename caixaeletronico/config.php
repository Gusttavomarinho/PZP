<!-- colocando bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
//fazendo conexao com o BD
try {
    $pdo = new PDO("mysql:dbname=pzp_caixaeletronico;host=localhost","root","root");

} catch (PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
