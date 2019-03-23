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
<form method="POST" class="form">
    <div class="form-group">
        <label for="form-nome">Nome</label>
        <input type="text" class="form-control" id="form-nome"  placeholder="Digite seu nome" name="nome">
    </div>
    <div class="form-group">
        <label for="form-email">E-mail</label>
        <input type="email" class="form-control" id="form-email"  placeholder="Digite seu e-mail" name="email">
    </div>
    <div class="form-group">
        <label for="form-senha">Senha</label>
        <input type="password" class="form-control" id="form-senha"  placeholder="Digite sua senha" name="senha">
    </div>

    <input type="submit" value="Cadastrar" class="btn btn-success"/><br/><br/>
</form>