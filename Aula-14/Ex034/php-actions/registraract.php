<?php

require_once "connect.php";

session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$nickname = $_POST['nickname'];
$senha = $_POST['senha'];

$sql = "SELECT all nickname FROM pessoa";
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_array($resultado);

print_r($dados);

/*$sql = "INSERT INTO pessoa (nome, idade, email, telefone, nickname, senha) VALUES ('$nome', '$idade', '$email', '$telefone', '$nickname', '$senha')";
mysqli_query($conexao,$sql);
*/

?>