<?php 
require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO {

  private $pdo;

  public function __construct(PDO $driver){
    $this->pdo = $driver;
  }


  public function add(Usuario $u){

  }


  public function findAll(){
    $array = [];
    $sql = $this->pdo->query("SELECT * from usuarios");
    if($sql->rowCount() > 0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);


        foreach($data as $item){
            $u = new Usuario();
            $u->setId($item['id']);
            $u->setNome($item['nome']);
            $u->setEmail($item['email']);

            $array[] = $u;
        }
    }
    return $array;
    
}


  public function findById($id){

  }


  public function update(Usuario $u){

  }


  public function delete($id){

  }
}


//$teste = new Usuario();
//$teste->setId(100);

//print_r($teste);