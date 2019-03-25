<?php
require 'config.php';
session_start();

//mensagem para ususario logado , verificando se um cookie existe e mostrando seu valor
if(isset($_COOKIE['logado']) && empty($_COOKIE['logado']) == false){

    echo "<span class='alert alert-success' role='alert'>Bem vindo: ".$_COOKIE['logado']."</span><br/><br/><br/>";
}

if(isset($_SESSION['id']) && empty($_SESSION['id'] == false)){
    echo "Area restrita... ...";

}else {
    header("Location: login.php");
}
?>