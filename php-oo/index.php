<?php

//revisando o php OO
//criando a class
class Post {
    private int $likes = 0;
    public array $comments = []; //isso sao as propiedades { caracteristicas }
    private string $author;

    public function __construct($qtLikes = 0){
       $this->likes = $qtLikes * 2;
    }

    public function increaseLike(){
        echo 'abc';
        $this->likes++;
    }

    public function decreaseLike(){
        $this->likes--;
    }

    //get e set metodos
    public function setAuthor($n){
        if(strlen($n) >= 3){
            $this->author = ucfirst($n); 
        }
        
    }

    public function getAuthor(){
        return $this->author ?? 'Visitante';
    }

    public function setLikes($a){
        $this->likes = $a;
    }

    public function getLikes(){
        return $this->likes;
    }

    public function setComments($a){
        $this->comments = $a;
    }

    public function getComments(){
        return $this->comments;
    }


}


//criando o objeto

/*
$post1 = new Post();
$post1->likes = 7;
$post1->increaseLike();

$post2 = new Post();
$post2->likes = 10;
$post2->decreaseLike();

$post3 = new Post();
//$post3->likes = 'Gustavo'; // testando o Typed Properties do PHP 7.4

echo "POST 1: {$post1->likes} "."<br/>";

echo "POST 2: {$post2->likes} "."<br/>"; */

$post1 = new Post(25);
$post1->setAuthor('gustavo');

$post2 = new Post(15);
$post2->setAuthor('fulano beltrano');

echo "POST 1: {$post1->getLikes()} likes -- {$post1->getAuthor()} "."<br/>";

echo "POST 2: {$post2->getLikes()} likes -- {$post2->getAuthor()} "."<br/>";

  ?>