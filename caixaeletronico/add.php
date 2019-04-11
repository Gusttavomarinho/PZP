<?php
session_start();
require 'config.php';

if(isset($_POST['tipo'])){

    $tipo = $_POST['tipo'];
    $valor = str_replace(',','.',$_POST['valor']);
    $valor = floatval($valor);

    $sql = $pdo->prepare("INSERT INTO historico (id_conta,tipo,valor,data_operacao) VALUES (:id_conta,:tipo,:valor,NOW())");
    $sql->bindValue(':id_conta',$_SESSION['banco']);
    $sql->bindValue(':tipo',$tipo);
    $sql->bindValue(':valor',$valor);
    $sql->execute();

    if($tipo == 0){
        //deposito
        $sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
        $sql->bindValue(':valor',$valor);
        $sql->bindValue(':id',$_SESSION['banco']);
        $sql->execute();

        header("Location: index.php");
        exit;

    }else{
        //saque
        $sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
        $sql->bindValue(':valor',$valor);
        $sql->bindValue(':id',$_SESSION['banco']);
        $sql->execute();

        header("Location: index.php");
        exit;

    }


}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Caixa Eletronico</title>
</head>
<body>
<div class="container container-fluid">
    <form method="POST">
        <div class="form-group">
            <label for="label_tipo">Tipo de operação</label>
            <select class="form-control" id="label_tipo" name="tipo">
                <option value="0">Deposito</option>
                <option value="1">Saque</option>
            </select>
        </div>
        <div class="form-group">
            <label for="label_valor">Valor</label>
            <input type="text" class="form-control" id="label_valor" pattern="[0-9.,]{1,}" name="valor" placeholder="0000.00"/>
        </div>
        <input class="btn btn-success" type="submit" value="Adicionar"/>
    </form>
</div>
</body>
</html>
