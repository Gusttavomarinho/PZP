<?php
//define qual o sgbd , depois o nome do banco de dados , ip do servidor
$dsn = "mysql:dbname=pzp_blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    // precisa de 3 parametros para conectar
	$pdo = new PDO($dsn,$dbuser,$dbpass);

	echo "conexão estabelecida com sucesso!";

} catch(PDOException $e){

	echo "Falhou: ".$e->getMessage();
}
?>