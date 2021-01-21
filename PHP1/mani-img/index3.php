<?php

$arquivo = 'paisagem.jpg';
$width = 300;
$heigth= 300;

list($originalWidth,$originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $heigth;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if($ratioDest > $ratio) {
  $finalWidth = $heigth * $ratio;
  $finalHeight = $heigth;
} else {
  $finalHeight = $width / $ratio;
  $finalWidth = $width;
}

if($finalWidth < $width){
  $finalWidth = $width;
  $finalHeight = $width / $ratio;

  $finalY = -(($finalHeight - $heigth) / 2);

}else {
  $finalHeight = $heigth;
  $finalWidth = $heigth * $ratio;

  $finalX = -(($finalWidth - $width) / 2);

}


$imagem = imagecreatetruecolor($width,$heigth);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled($imagem,
$originalImg,
$finalX,$finalY, 0,0,
$finalWidth, $finalHeight,
$originalWidth, $originalHeight);

header("Content-Type: image/jpeg"); // transformando a pagina em uma img
imagejpeg($imagem,null,100);


