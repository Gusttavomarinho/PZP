<?php
//iniciando uma session no navegador
session_start();
require 'config.php';

//verificando se a pessoa esta logada
if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){

    $id = $_SESSION['banco'];
    //consultando a conta com o id da session
    $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $sql->bindValue(":id",$id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $dado = $sql->fetch();
    }else{
        header("Location: sair.php");
    }


}else{
    header("Location: login.php");
    exit;
}

?>
<html>
    <head>
        <title>Caixa Eletronico</title>
    </head>
    <body>
            <h1>Banco GHMO</h1>
            Titular: <?php echo $dado['titular']; ?><br/>
            Agencia: <?php echo $dado['agencia']; ?><br/>
            Conta: <?php echo $dado['conta']; ?><br/>
            Saldo: <?php echo $dado['saldo']; ?><br/>
            <a href="sair.php">Sair</a>
    </body>
</html>