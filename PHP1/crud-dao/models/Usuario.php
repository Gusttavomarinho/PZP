<?php 
//criando o classe para minupar o usuario
class Usuario {
  
  private $id;
  private $nome;
  private $email;

  public function getId(){
    return $this->id;
  }

  public function setId($i){
    $this->id = trim($i); // remover os espaços com o trim
  }

  public function getNome(){
    return $this->nome;
  }

  public function setNome($nome){
    $this->nome = ucwords(trim($nome)); // deixando a primeira letra de cada nome Maiscula
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($em){
    $this->email = strtolower(trim($em)); //deixando  o email minusculo
  }


}
//criando a interface para o DAO de usuario

interface UsuarioDAO {
  public function add(Usuario $u);
  public function findAll();
  public function findByEmail($email);
  public function findById($id);
  public function update(Usuario $u);
  public function delete($id);
}


