<?php
if(isset($_POST['nome'])){
	$nome = $_POST['nome']." ";
	file_put_contents("teste.txt",$nome,FILE_APPEND);

	header("Location: antif5.php");
}

?>
<form method="POST">

	<input type="text" name="nome" placeholder="nome"><br/><br/>
	<input type="submit" name="enviar" value="Enviar Dados">
</form>