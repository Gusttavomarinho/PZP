<?php 
require 'config.php';
require 'dao/UsuarioDAOMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$lista = $usuarioDAO->findAll();

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
      <td><?=$usuario->getId();?></td>
      <td><?=$usuario->getNome();?></td>
      <td><?=$usuario->getEmail();?></td>
      <td>
          <a href="update.php?id=<?=$usuario->getId(); ?>"> [ Editar ]</a>
          <a href="delete.php?id=<?=$usuario->getId(); ?>" onclick=" return confirm('Tem certeza que deseja excluir ?')"> [ Excluir ]</a>
      </td>
  </tr>

  <?php endforeach; ?>
</table>