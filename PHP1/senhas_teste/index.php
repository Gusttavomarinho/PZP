<?php 

//brincando com Encriptação de senhas

$senha = '1234';

$hash = password_hash($senha,PASSWORD_DEFAULT);

echo "SENHA ORIGINAL:".$senha."<br/>";
echo "HASG:".$hash."<br/>";