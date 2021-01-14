<?php 
require 'config.php';
require 'dao/UsuarioDAOMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); // JA FAZ UMA VALIDAÇÃO SE E UM EMAIL MESMO
$id = filter_input(INPUT_POST,'id');


if ($id && $name && $email) {

  $novoUsuario = $usuarioDAO->findById($id);
  $novoUsuario->setNome($name);
  $novoUsuario->setEmail($email);

  $usuarioDAO->update($novoUsuario);

  header("Location: index.php");
  exit;

}else {
  header("Location: update.php?id=".$id);
  exit;
}