<?php

//revisando o php OO
//criando a class
class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
}


//criando o objeto

$post1 = new Post();
$post1->likes = 7;

$post2 = new Post();
$post2->likes = 10;

echo "POST 1: {$post1->likes} "."<br/>";

echo "POST 2: {$post2->likes} "."<br/>";

  ?>