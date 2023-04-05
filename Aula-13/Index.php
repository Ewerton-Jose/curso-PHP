<?php
require "bd.php";
session_start();
$_SESSION['logado'] = '0';
if ($_SESSION['logado'] == '1'){
    header('ok.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="key">Sua senha: </label>
        <input type="key" name="senha">
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
$sql = "SELECT * FROM senhas_registradas";
$resultado = mysqli_query($conexao,$sql);

while ($dados = mysqli_fetch_array($resultado)){
    if ($senha == $dados['senha'] && $user == $dados['usuario']){
        echo "senha existente";
        header("Location: ok.php");
        $_SESSION['logado'] = '1';
        break;
    }
}  
?>