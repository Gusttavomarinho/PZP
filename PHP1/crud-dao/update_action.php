<?php 
require 'config.php';

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); // JA FAZ UMA VALIDAÇÃO SE E UM EMAIL MESMO
$id = filter_input(INPUT_POST,'id');


if ($name && $email && $id) {

  //verificando se tem usuario cadastrado com este id

  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(':email',$id);
  $sql->execute();
  
  if($sql->rowCount() === 0){
      //update usuario no BD
        $sql = $pdo->prepare("UPDATE usuarios SET nome= :name , email = :email WHERE id = :id");
        $sql->bindValue(':name',$name);  //assiciação do valor (BindValue) , associação de varaivel (BindParam)
        $sql->bindValue(':email',$email);
        $sql->bindValue(':id',$id);
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