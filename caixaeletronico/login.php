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
        <form method="POST">
            Agencia:<br/>
            <input type="text" name="agencia" /><br/><br/>

            Conta:<br/>
            <input type="text" name="conta" /><br/><br/>

            Senha:<br/>
            <input type="password" name="senha" /><br/><br/>

            <input type="submit" value="Entrar"/>


        </form>

</body>
</html>
