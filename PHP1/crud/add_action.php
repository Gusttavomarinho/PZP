<?php 
require 'config.php';

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); // JA FAZ UMA VALIDAÇÃO SE E UM EMAIL MESMO


if ($name && $email) {

    //verificando se ja tem o email cadastrado

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email',$email);
    $sql->execute();
    
    if($sql->rowCount() === 0){
        //add usuario no BD
          $sql = $pdo->prepare("INSERT INTO usuarios (nome,email) VALUES (:name,:email) ");
          $sql->bindValue(':name',$name);  //assiciação do valor (BindValue) , associação de varaivel (BindParam)
          $sql->bindValue(':email',$email);
          $sql->execute();

          header("Location: index.php");
          exit;

    } else {
      header("Location: add.php");
    }


} else {
    header("Location: add.php");
    exit;
}