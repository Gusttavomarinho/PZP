<pre>
<?php
/**
 * Created by PhpStorm.
 * User: Gustavo Marinho
 * Date: 25/03/2019
 * Time: 16:23
 */

if(isset($_FILES['arquivo'])) {

    if(count($_FILES['arquivo']['tmp_name']) > 0 ){

        for($q=0;$q < count($_FILES['arquivo']['tmp_name']);$q++){

            $novoNome = md5(time());

            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q],'arquivos/'.$novoNome.$_FILES['arquivo']['name'][$q]);

        }
    }
}

?>
</pre>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" multiple /><br/><br/>

    <input type="submit" value="Enviar Arquivos" />
</form>
