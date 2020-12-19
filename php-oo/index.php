<?php

//revisando o php OO
//criando a class
class Post {
    public $likes = 0;
    public $comments = []; //isso sao as propiedades { caracteristicas }
    public $author;

    public function increaseLike(){
        $this->likes++;
    }

    public function decreaseLike(){
        $this->likes--;
    }
}


//criando o objeto

$post1 = new Post();
$post1->likes = 7;
$post1->increaseLike();

$post2 = new Post();
$post2->likes = 10;
$post2->decreaseLike();

echo "POST 1: {$post1->likes} "."<br/>";

echo "POST 2: {$post2->likes} "."<br/>";

  ?>