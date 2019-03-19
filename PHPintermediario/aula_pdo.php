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

        //listando ususarios no banco de dados
        foreach ($sql->fetchAll() as $usuario){
            echo "Nome: ".$usuario["nome"]."<br/>";
            echo "Email: ".$usuario["email"]."<br/>";
            echo "Senha: ".$usuario["senha"]."<br/>";
        }
        //inserindo usuarios no banco de dedados
        /*
        $nome = "TESTE";
        $email = "fdofkodkfd@hotmail.com.br";
        $senha = md5("1234@5456465");
        $sql = "INSERT INTO usuarios SET nome='$nome',email='$email',senha='$senha'";
        $sql= $pdo->query($sql);
        echo "Usuario inserido: ".$pdo->lastInsertId(); */

        /*o codigo acima esta comentado pois e exemplos da aula de como inserir dados se deixa descomentado
        //toda vida que eu acessar a pagina vai esta inserindo algum registro */


    }else {
        echo "Não a registro de ususarios!";
    }

} catch(PDOException $e){

	echo "Falhou: ".$e->getMessage();
}
?>