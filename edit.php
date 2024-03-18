<?php
include ("conexao.php");
$nome = $_GET['nome'];
$senha = $_GET['senha'];
$id = $_GET['id_usuario'];
$sql = "UPDATE usuario SET nome = '$nome',senha ='$senha'WHERE id_usuario=$id";
if  (mysqli_query($conexao, $sql)) {
    echo "arquivo enviado com sucesso";
    header('location: index.php');
} else {
    echo "falha ao enviar arquivo";
}