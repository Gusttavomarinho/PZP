<?php
require 'config.php';
//verificando se o usuario enviou o form e add os comentarios
if(isset($_POST['nome']) && empty($_POST['nome']) == false)
{
    //coletando os dados enviados
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    //add comentarios no banco de dados
    $sql = "INSERT INTO comentarios SET nome = :nome , mensagem = :mensagem , created=CURRENT_TIMESTAMP";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':mensagem',$mensagem);
    $sql->execute();
    //voltando para o index
    header("Location: index.php");
    echo $nome;
    echo $mensagem;
};

?>
<div class="container container-fluid">
    <h1>Sistema de Comentarios</h1>
    <form method="POST" class="form">
        <div class="form-group">
            <label for="form-nome">Nome</label>
            <input type="text" class="form-control" id="form-nome"  placeholder="Digite seu nome" name="nome">
        </div>
        <div class="form-group">
            <label for="form-mensagem">Mensagem curta</label>
            <textarea class="form-control" id="form-mensagem" rows="3" name="mensagem"></textarea>
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-success"/><br/><br/>
    </form>
</div>
<?php
$sql = "SELECT * FROM comentarios";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0)
{
    foreach($sql->fetchAll() as $comentario)
    {  
        echo '<div class="jumbotron">';
        echo '<h1 class="display-10">'.$comentario['nome'].'</h1>';
        echo '<p class="lead">'.$comentario['mensagem'].'</p>';
        echo '<hr class="my-4">';
        echo '<p>Criado em: '.$comentario['created'].'</p>';
        echo '<a class="btn btn-primary btn-lg" href="excluir.php?id='.$comentario['id'].'" role="button">Excluir</a>';
        echo '</div>';

    }
}

?>