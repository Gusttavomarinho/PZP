<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
/**
 * Created by PhpStorm.
 * User: gustt
 * Date: 20/03/2019
 * Time: 19:08
 */

$dsn = "mysql:dbname=pzp_blog;host=localhost";

$dbuser = "root";
$dbpass = "root";

try {

    $pdo = new PDO($dsn,$dbuser,$dbpass);

}catch (PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();
}