<?php

require_once "connect.php";

session_start();

$id = $_SESSION['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$nickname = $_POST['nickname'];
$senha = $_POST['senha'];

$sql = "UPDATE pessoa SET nome = '$nome', email = '$email', telefone = '$telefone', idade = '$idade', nickname = '$nickname', senha = '$senha' WHERE id = $id";
mysqli_query($conexao,$sql);
header(
    "Location: ../restrita.php"
)
?>