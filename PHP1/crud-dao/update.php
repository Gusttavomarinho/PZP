<?php

require 'config.php';
$info = [];
$id = filter_input(INPUT_GET,'id');
if($id){

  //prcorando o usuario no banco de dados
  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(':id',$id);
  $sql->execute();

    if($sql->rowCount() > 0 ){

      //pegar os dados do usuario
        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }else {
      header("Location: index.php");
      exit;

    }


}else{
    header("Location: index.php");
    exit;
}

?>

<h1>Editar Usuario</h1>
<form method="POST" action="update_action.php">
  <input type="hidden" name="id" value="<?=$info['id']?>"/>
  <label>
    NOME:
    <input type="text" name="name"  value="<?=$info['nome']?>" />
  </label><br/><br/>

  <label>
    EMAIL:
    <input type="email" name="email"  value="<?=$info['email']?>"/>
  </label><br/><br/>

  <input type="submit" value="Salvar" />

</form>