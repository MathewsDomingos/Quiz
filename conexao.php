<?php
//https://phpmyadmin.fatectq.edu.br/index.php?route=/sql&pos=0&db=pw_user_db&table=questoes&server=2
$Servidor = "201.55.32.20:6033";
$User = "pw_user";
$Senha = "Fatec@123";
$Banco = "pw_user_db";

$conexao = mysqli_connect($Servidor,$User,$Senha,$Banco);
mysqli_select_db($conexao,$Banco);

?>