
<?php
//trabalhando com while
$x = 1;

while ($x <= 10) {
	# code...
	echo "X é igual a ".$x."<br/>";

	$x++;
}

// $x++ eu mostro ou faço algo para depois incrementar e ++$x incrementa para depois fazer algo


//trbalhando com for

for($x = 0; $x <= 10; $x++){

	echo "{for}		- 	X é igual a ".$x."<br/>";
}

echo "<br/>";

//trabalhando com foreach

$nomes =  array(
	array("nome"=>"Bonieky","idade"=>90),
	array("nome"=>"Gustavo","idade"=>22),
	array("nome"=>"Fulano","idade"=>19),
	array("nome"=>"Ze","idade"=>125),
	array("nome"=>"Cicrano","idade"=>18),
	array("nome"=>"Maria","idade"=>20),
	array("nome"=>"Joaquina","idade"=>21)
	
);

foreach ($nomes as  $aluno) {
	# code...
	echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"]."<br/>";
}

?>