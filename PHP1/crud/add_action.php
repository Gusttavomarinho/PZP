<?php 
require 'config.php';

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); // JA FAZ UMA VALIDAÇÃO SE E UM EMAIL MESMO


if ($name && $email) {

    $sql = $pdo->prepare("INSERT INTO usuarios (nome,email) VALUES (:name,:email) ");
    $sql->bindValue(':name',$name);  //assiciação do valor (BindValue) , associação de varaivel (BindParam)
    $sql->bindValue(':email',$email);
    $sql->execute();

    header("Location: index.php");
    exit;

} else {
  header("Location: add.php");
  exit;
}