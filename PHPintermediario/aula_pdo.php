<?php
//define qual o sgbd , depois o nome do banco de dados , ip do servidor
$dsn = "mysql:dbname=pzp_blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    // precisa de 3 parametros para conectar
	$pdo = new PDO($dsn,$dbuser,$dbpass);

	//buscando os registros de ususarios
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

    //verificando se veio algum registro
    if($sql->rowCount() > 0){
        //echo "Tem usuarios sim."."<br/>";

        foreach ($sql->fetchAll() as $usuario){
            echo "Nome: ".$usuario["nome"]."<br/>";
            echo "Email: ".$usuario["email"]."<br/>";
            echo "Senha: ".$usuario["senha"]."<br/>";
        }

    }else {
        echo "Não a registro de ususarios!";
    }

} catch(PDOException $e){

	echo "Falhou: ".$e->getMessage();
}
?>