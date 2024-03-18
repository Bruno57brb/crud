<?php
$nome = $_GET['nome'];
$senha = $_GET['senha'];

    include('conexao.php');
$sql = "INSERT INTO usuario(
    nome,
    senha)
    VALUES
    ('$nome','$senha')";


    if (mysqli_query($conexao, $sql)) {
        echo"pessoa cadastrada";
        header('location: index.php');
    }
    else { 
        echo "falha ao cadastrar";
    }
    ?>