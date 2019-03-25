<?php
require 'config.php';
session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false ) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':senha',$senha);
    $sql->execute();
    //pegando um resultado da consulta
    $dado = $sql->fetch();
    //verificando se a consulta sql retorno alguma linha e verificando se os dados da consulta bate com oque foi digitado no form
    if($sql->rowCount() > 0 AND  $dado['email'] == $email AND $dado['senha'] == $senha){
        echo"tem algo ai e correto";

        $_SESSION['id'] = $dado['id'];
       setcookie('logado',$dado['nome'],time()+1800);
        header("Location: index.php");


    }else{
        echo "tem algo errado!";
    }


}

?>
<form method="POST">
    <div class="form-group">
        <label for="form-email">E-mail</label>
        <input name="email" type="email" class="form-control" id="form-email" aria-describedby="emailHelp" placeholder="Digite seu email"/>
    </div>
    <div class="form-group">
        <label for="form-senha">Senha</label>
        <input name="senha" type="password" class="form-control" id="form-senha" placeholder="Digite sua senha"/>
    </div>
    <input type="submit" value="Entrar" class="btn btn-primary" />
</form>