<?php 
require 'config.php';
require 'dao/UsuarioDAOMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); // JA FAZ UMA VALIDAÇÃO SE E UM EMAIL MESMO


if ($name && $email) {

    //verificando se ja tem o email cadastrado

    if($usuarioDAO->findByEmail($email) === false){

      $novoUsuario = new Usuario();
      $novoUsuario->setNome($name);
      $novoUsuario->setEmail($email);

      $usuarioDAO->add($novoUsuario);

      header("Location: index.php");
      exit;


    }else {
      header("Location: add.php");
      exit;
    }
}