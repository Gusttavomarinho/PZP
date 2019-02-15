<?php
//quando vc coloca o ! na frente ela inverte o resultado no empty

//recebndo os dados do formulario e verificnado se o usuario digitou o email e senha e mostrando na tela
if(isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email'])  && !empty($_POST['senha'])  ){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	echo "Meu email e: ".$email;
	echo ". Minha senha e: ".$senha;
}
?>
<hr/>
<form method="POST">

	<input type="text" name="email" placeholder="Email"><br/><br/>

	<input type="password" name="senha" placeholder="Senha"><br/><br/>

	<input type="submit" name="enviar" value="Enviar Dados">
</form>