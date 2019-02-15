<?php
//quando vc coloca o ! na frente ela inverte o resultado no empty

//recebndo os dados do formulario e verificnado se o usuario digitou o email e senha e mostrando na tela
if(isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email'])  && !empty($_POST['senha'])  ){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	echo "Meu email é: ".$email;
	echo ". Minha senha é: ".$senha;
}
?>