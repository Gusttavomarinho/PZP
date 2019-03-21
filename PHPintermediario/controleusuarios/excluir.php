<?php
require 'config.php';
//verifica se foi passado o id ou nao
if(isset($_GET['id']) && empty($_GET['id']) == false){
    //coletando o id via get
    $id = $_GET['id'];
    //realizando a query SQL e deletnado o usuario
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id',$id);
    $sql->execute();
    //voltando para o index
    header("Location: index.php");

}else {
    //se veio sem id ele cai no else e volta para o index
    header("Location: index.php");
}
?>