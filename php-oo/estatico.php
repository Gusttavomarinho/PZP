<?php
/** Revisando a função estatica */
class Matematica {
  public static string $nome = 'Gustavo';

  public static function somar($x , $y) {
    return $x + $y;
  }
}

//acessar o metodo sem objeto , devido a ser estatico
echo Matematica::somar(20,30);
//acessar a variavel sem ter objeto
echo Matematica::$nome;




