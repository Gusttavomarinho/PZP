<?php

// GD serve para minupular img no php

/** criando uma imagem  */
$imagem = imagecreatetruecolor(300,300);

//gerando uma cor para a img
$cor = imagecolorallocate($imagem,255,0,0);

//colocando a cor na imagem
imagefill($imagem,0,0,$cor);

//exibir na tela a img
//header("Content-Type: image/jpeg"); // transformando a pagina em uma img
imagejpeg($imagem,'nova_imagem.jpg',100);



