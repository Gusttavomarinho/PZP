<?php 
//incluindo o composer auto load
require '../vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager as Image;

// configure with favored image driver (gd by default)
$manager = new Image(array('driver' => 'gd'));

$image = $manager->make('paisagem.jpg');
$image->resize(150,150);
$image->save('paisagem_nova_lib.jpg');
