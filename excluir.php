<?php
include ("conexao.php");
$id = $_POST['id_usuario'];
$sql = "SELECT * FROM usuario WHERE id_usuario = $id";
$resultado = mysqli_query($conexao, $sql);
$opcao = mysqli_fetch_assoc($resultado);
$sql ="DELETE FROM usuario WHERE id_usuario = $id";
mysqli_query($conexao, $sql);
header('location index.php');
?>