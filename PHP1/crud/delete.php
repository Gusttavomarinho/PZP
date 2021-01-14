<?php 
require 'config.php';
$id = filter_input(INPUT_GET,'id');


if ($id) {

  //verificando se tem usuario cadastrado com este id

  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(':email',$id);
  $sql->execute();
  
  if($sql->rowCount() === 0){
      //deletando usuario no BD
        $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();
  }
}

header("Location: index.php");
exit;