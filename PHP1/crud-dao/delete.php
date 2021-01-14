<?php 
require 'config.php';
require 'dao/UsuarioDAOMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);
$id = filter_input(INPUT_GET,'id');


if ($id) {

  //deletando usuario no BD
  $deletarUsuario = $usuarioDAO->delete($id);
  
  }
header("Location: index.php");
exit;