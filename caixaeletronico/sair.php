<?php


//destruindo a session para fazer o logout
session_start();

unset($_SESSION['banco']);

header("Location: index.php");

exit;
