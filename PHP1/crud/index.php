<?php 
require 'config.php';

$lista = [];

$sql = $pdo->query("SELECT * FROM usuarios");

if($sql->rowCount() > 0){

  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

}


?>
<a href="add.php"> ADICIONAR USUARIO</a><br/>
<table border="1" width=100%>
  <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>EMAIL</th>
      <th>AÇÕES</th>
  </tr>
  <?php foreach($lista as $usuario): ?>
    <tr>
      <td><?=$usuario['id']; ?></td>
      <td><?=$usuario['nome']; ?></td>
      <td><?=$usuario['email']; ?></td>
      <td>
          <a href="update.php?id=<?=$usuario['id']; ?>"> [ Editar ]</a>
          <a href="delete.php?id=<?=$usuario['id']; ?>" onclick=" return confirm('Tem certeza que deseja excluir ?')"> [ Excluir ]</a>
      </td>
  </tr>

  <?php endforeach; ?>
</table>