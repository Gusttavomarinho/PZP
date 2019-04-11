<?php
session_start();
require 'config.php';
if(isset($_POST['agencia']) && !empty($_POST['agencia'])){
    $agencia = $_POST['agencia'];
    $conta = $_POST['conta'];
    $senha = md5($_POST['senha']);

    //fazendo a consulta SQL
    $sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
    $sql->bindValue(":agencia",$agencia);
    $sql->bindValue(":conta",$conta);
    $sql->bindValue(":senha",$senha);
    $sql->execute();

    //verificando se achou algum registro

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();

        $_SESSION['banco'] = $sql['id'];

        header("Location: index.php");

    }


};
?>
<html>
<head>
    <title>Caixa Eletronico</title>
</head>
<body>
    <div class="container container-fluid">
        <form method="POST">
            <div class="form-group">
                <label for="label_agencia">Agencia</label>
                <input type="text" class="form-control" id="label_agencia" name="agencia" placeholder="0000"/>
            </div>
            <div class="form-group">
                <label for="label_conta">Conta</label>
                <input type="text" class="form-control" id="label_conta" name="conta" placeholder="0000"/>
            </div>
            <div class="form-group">
                <label for="label_senha">Senha</label>
                <input type="password" class="form-control" id="label_senha" name="senha" placeholder="Digite sua senha"/>
            </div>
            <input class="btn btn-dark" type="submit" value="Entrar"/>


        </form>
    </div>

</body>
</html>
