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
    Nome:<br/>
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"/><br/><br/>
    E-mail:<br/>
    <input type="text" name="email" value="<?php echo $dado['email']; ?>"/><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" disabled value=""/><br/><br/>

    <input type="submit" value="Cadastrar"/><br/><br/>
</form>