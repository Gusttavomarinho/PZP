<?php
require 'config.php';
if(isset($_POST['nome']) && empty($_POST['nome']) == false ){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "INSERT INTO usuarios SET nome = :nome , email = :email , senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':senha',$senha);
    $sql->execute();

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