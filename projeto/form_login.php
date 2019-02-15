<?php
//diferença de include ou require , require para a execução se da erro , o include so avisa e segue executando o resto
require "recebedor.php"
?>
<form method="POST">

	<input type="text" name="email" placeholder="Email"><br/><br/>

	<input type="password" name="senha" placeholder="Senha"><br/><br/>

	<input type="submit" name="enviar" value="Enviar Dados">
</form>