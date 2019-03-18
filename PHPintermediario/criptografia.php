<?php
//aula de php sobre criptografia basica

$nome = "Gustavo";
$nome2 = md5($nome);
$nome3 = sha1($nome);
$nome_hash = password_hash($nome, PASSWORD_DEFAULT);
$nome_base64 = base64_encode($nome);

echo "Nome original: ".$nome."<br/>";
echo "Nome criptografado: ".$nome2."<br/>";
echo "Nome criptografado sha1: ".$nome3."<br/>";
echo "Nome criptografado password_hash: ".$nome_hash."<br/>";
echo "Nome base64: ".$nome_base64."<br/>";
?>