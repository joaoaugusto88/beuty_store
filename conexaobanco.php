<?php

//Conectar no banco
$databaseHost    = 'localhost';
$databaseUsuario = 'root';
$databaseSenha   = '';
$databaseNome    = 'loja_cosmeticos';

$conexaobanco = mysqli_connect($databaseHost, $databaseUsuario, $databaseSenha, $databaseNome);

mysqli_set_charset($conexaobanco, "utf8");

?>