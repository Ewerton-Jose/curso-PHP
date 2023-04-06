<?php
require_once "php-actions/bd.php"; // Pegando o BD
$_SESSION['logado'] = '0';
session_start(); //Iniciando uma sessão
$_SESSION['logado'] = '0'; // Como não tá logado recebe 0
if ($_SESSION['logado'] == '1'){ // Se logado for igual 1, é verdadeiro
    header('Location: restrita.php'); //redireciona para outra página restrita
}
?>


<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="key">Sua senha: </label>
        <input type="text" name="senha">
        <br>
        <label for="user">Usuário: </label>
        <input type="text" name="user">
        <button type="submit">OK</button>
    </form>
</body>
</html>

<?php

$senha = $_POST["senha"];
$user = $_POST["user"];
$sql = "SELECT * FROM senhas_registradas"; //Código SQL
$resultado = mysqli_query($conexao,$sql); //Pegando os dados

while ($dados = mysqli_fetch_array($resultado)){ //Verificando os dados
    if ($senha == $dados['senha'] && $user == $dados['usuario']){ //Se os dados forem compatíveis
        echo "senha existente";
        $_SESSION['logado'] = '1';
        header("Location: restrita.php");
        break;
    }
}  
?>