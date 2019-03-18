<?php  
$autor = addcslashes($_POST["autor"]);

$sql = "SELECT * FROM posts WHERE autor = '$autor";
?>