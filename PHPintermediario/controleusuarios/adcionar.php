<?php
require 'config.php';
//verificando se o usuario enviou o nome ou se deixou em branco
if(isset($_POST['nome']) && empty($_POST['nome']) == false ){
    //coletandos os dados enviados
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    //realizando a consulta SQL
    $sql = "INSERT INTO usuarios SET nome = :nome , email = :email , senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':senha',$senha);
    $sql->execute();
    //voltando para o index
    header("Location: index.php");
}
?>
<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" placeholder="Digite seu nome"/><br/><br/>
    E-mail:<br/>
    <input type="text" name="email" placeholder="Digite seu email"/><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" placeholder="Digite sua senha"/><br/><br/>

    <input type="submit" value="Cadastrar"/><br/><br/>
</form>