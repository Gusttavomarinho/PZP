<?php 
require 'config.php';
$id = filter_input(INPUT_GET,'id');


if ($id) {

  //deletando usuario no BD
  $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
  $sql->bindValue(':id',$id);
  $sql->execute();
  }
header("Location: index.php");
exit;