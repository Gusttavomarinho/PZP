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

    //pegando registro da conta
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
    <div class="container container-fluid">
            <h1>Banco GHMO</h1>
            Titular: <?php echo $dado['titular']; ?><br/>
            Agencia: <?php echo $dado['agencia']; ?><br/>
            Conta: <?php echo $dado['conta']; ?><br/>
            Saldo: <?php echo 'R$'. number_format($dado['saldo'],2); ?><br/>
            <a href="sair.php" class="btn btn-danger">Sair</a>
            <hr/>
            <h3>Movimentação/Extrato</h3>
            <a href="add.php" class="btn btn-primary">Adicionar Transação</a><br/><br/>
            <table border="0" width="100%" class="table">
                <tr>
                    <th scope="col">DATA</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">TIPO</th>
                </tr>
                <?php
                $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id");
                $sql->bindValue(":id",$id);
                $sql->execute();

                if($sql->rowCount() > 0){
                    foreach ($sql->fetchAll() as $movimentacao){

                        //formatando o tipo de operação
                        if($movimentacao['tipo'] == 0){
                            $tipo_operacao = 'DEPOSITO';
                            $font_color = 'green';

                        }else{
                            $tipo_operacao = 'SAQUE';
                            $font_color = 'red';

                        }

                        //listando na tabela
                        echo '<tr>';
                        echo '<td>'.date('d/m/Y H:i', strtotime($movimentacao['data_operacao'])).'</td>';
                        echo '<td style=color:'.$font_color.'>'.'R$'.number_format($movimentacao['valor'],2).'</td>';
                        echo '<td>'.$tipo_operacao.'</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </table>
    </div>
    </body>
</html>