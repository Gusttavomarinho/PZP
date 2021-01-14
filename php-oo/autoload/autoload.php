<?php
spl_autoload_register(function($class){
  $baseDir = __DIR__.'/classes/';
  
  //invertendo as barras para poder achar os arquivos
  $file = $baseDir.str_replace('\\','/', $class).'.php';

  if(file_exists($file)){

    require $file;

  }

});