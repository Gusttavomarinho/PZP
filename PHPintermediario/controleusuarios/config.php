<?php
/**
 * Created by PhpStorm.
 * User: gustt
 * Date: 20/03/2019
 * Time: 19:08
 */

$dsn = "mysql:dbname=pzp_blog;host=localhost";

$dbuser = "root";
$dbpass = "";

try {

    $pdo = new PDO($dsn,$dbuser,$dbpass);

}catch (PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();
}