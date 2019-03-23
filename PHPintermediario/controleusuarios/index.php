<?php
require 'config.php';
?>
<a class="btn btn-primary" href="adcionar.php">Adicionar Novo Usuário</a><br/>
<table border="0" width="100%" class="table">
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Ações</th>
    </tr>
    <?php
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0){
            foreach ($sql->fetchAll() as $usuario){
                echo '<tr>';
                echo '<td>'.$usuario['nome'].'</td>';
                echo '<td>'.$usuario['email'].'</td>';
                echo '<td><a class="badge badge-warning" href="editar.php?id='.$usuario['id'].'">Editar</a> - <a class="badge badge-danger" href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                echo '</tr>';
            }
        }
    ?>
</table>