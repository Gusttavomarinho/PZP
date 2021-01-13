<?php 
interface Database {

  public function listarProdutos();

  public function adicionarProduto();

  public function alterarProduto();
}

class MysqlDB implements Database {

  public function listarProdutos(){

  }

  public function adicionarProduto(){
    echo "Adicionando produtos com Mysql";
    
  }

  public function alterarProduto(){
    
  }

}

class OracleDB implements Database {

  public function listarProdutos(){

  }

  public function adicionarProduto(){
    echo "Adicionando produtos com OracleDB";
    
  }

  public function alterarProduto(){
    
  }

}

class NodeDB implements Database {

  public function listarProdutos(){

  }

  public function alterarProduto(){
    
  }

}

$db = new NodeDB();
$db->adicionarProduto();