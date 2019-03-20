<?php
/**
 * Created by PhpStorm.
 * User: Gustavo Marinho
 * Date: 20/03/2019
 * Time: 18:42
 */
// AULA SOBRE : PDO: PDOStatement e binds
//define qual o sgbd , depois o nome do banco de dados , ip do servidor
$dsn = "mysql:dbname=pzp_blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    // precisa de 3 parametros para conectar
    $pdo = new PDO($dsn,$dbuser,$dbpass);

    $nome = "Pedro";
    $id = 2;
    //onde eu quero passar algum valor na minha query eu coloco 2 pontos : e um nome para poder ser substituido
    $sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";
    //usando a função de preparar o sql para ser enviado para executar
    $preparacao = $pdo->prepare($sql);
    //informando qual sera o valor la na minha query onde eu coloquei os : e nomes
    $preparacao->bindValue(':novonome',$nome);
    $preparacao->bindValue(':id',$id);
    //executando minha query
    $preparacao->execute();






    echo "Usuario atualizado com sucesso!";


} catch(PDOException $e){

    echo "Falhou: ".$e->getMessage();
}
?>