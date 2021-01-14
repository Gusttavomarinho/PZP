<?php 

$hash = '$2y$10$oHS/I7fiLnHdCG.MTv8iDuwlIw4DSNBjJlCR1tJGBO52mw1DP1mDG';
$senha = 1234;

if(password_verify($senha,$hash)){
  echo 'Senha correta!';
}else{
  echo 'Senha errada!';
}