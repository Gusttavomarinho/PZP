<?php
require 'config.php';
$id = 0;
//verificando se o id não esta vazio veio sem id
if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = $_GET['id'];
}

//verificnado se ja foi enviado o formulario e fazendo o update de fato
if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nome= :nome , email= :email WHERE id= :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue('nome',$nome);
    $sql->bindValue('email',$email);
    $sql->bindValue(':id',$id);
    $sql->execute();

    header("Location: index.php");


}
//fazendo consulta para preencher o form com estes dados do usuario
$sql = "SELECT * FROM usuarios WHERE id= :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(':id',$id);
$sql->execute();
//verificando se tem 1 registro e pagando este registro
   if($sql->rowCount() > 0) {
       $dado = $sql->fetch();
   }else{
       header("Location: index.php");
    }//fim do if que conta as linhas

?>
<form method="POST">
    <form method="POST" class="form">
        <div class="form-group">
            <label for="form-nome">Nome</label>
            <input type="text" class="form-control" id="form-nome"  placeholder="Digite seu nome" name="nome" value="<?php echo $dado['nome']; ?>">
        </div>
        <div class="form-group">
            <label for="form-email">E-mail</label>
            <input type="email" class="form-control" id="form-email"  placeholder="Digite seu e-mail" name="email" value="<?php echo $dado['email']; ?>">
        </div>
        <input type="submit" value="Editar" class="btn btn-warning"/><br/><br/>
    </form>



</form>