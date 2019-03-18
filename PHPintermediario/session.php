<?php 
//iniciando uma session
session_start();

$_SESSION["teste"] = "Gustavo Marinho";

echo "Meu nome é: ".$_SESSION["teste"]."<br/>";

//criando um cookie

setcookie("meuteste","Fulano de tal",time()+3600); //time() pega a hora atual e tou add mais 3600 que e igual a 1hr , da a validade do cookie

echo "<br/>"."cookie setado com sucesso"."<br/>";

echo "Meu cookie é: ".$_COOKIE["meuteste"]."<br/>";

?>