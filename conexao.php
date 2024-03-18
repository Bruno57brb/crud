<?php
$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco ="git";
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno()) {
    echo "problemas para entrar no banco";  
    echo mysqli_connect_error();
    die(); 
}