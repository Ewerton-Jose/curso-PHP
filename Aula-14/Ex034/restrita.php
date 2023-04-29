<?php

require_once 'php-actions/connect.php';
include_once 'includes/header.html';

session_start();
if ($_SESSION['logado'] == '0'){
    header('Location: index.php');
};

$id = $_SESSION['id'];

$sql = "SELECT * FROM pessoa where id = $id";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
    
echo $dados['nome']. '<br>';
echo $dados['email'].'<br>';
echo $dados['telefone'].'<br>';
echo $dados['idade'].'<br>';
echo $dados['login'].'<br>';

include_once 'includes/footer.html';
    

?>

<form action="php-actions/sair.php"><button type="submit">Sair</button></form>