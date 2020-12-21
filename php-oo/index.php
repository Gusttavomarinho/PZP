<?php

//revisando o php OO
//criando a class
class Post {
    public int $likes = 0;
    public array $comments = []; //isso sao as propiedades { caracteristicas }
    public string $author;

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

$post3 = new Post();
//$post3->likes = 'Gustavo'; // testando o Typed Properties do PHP 7.4

echo "POST 1: {$post1->likes} "."<br/>";

echo "POST 2: {$post2->likes} "."<br/>";

  ?>