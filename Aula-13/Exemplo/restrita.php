<?php

require_once "php-actions/bd.php";
session_start();
if ($_SESSION['logado'] == '0'){
    header('Location: index.php');
};

$sql = "SELECT * FROM senhas_registradas";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
$user = $dados['usuario'];
$info = $dados['emergencia'];
echo "Olá $user, Seu contato de emergência é $info";

?>

<h1>Tudo certo</h1>

<form action="php-actions/sair.php" method="post">
    <button type="submit">Sair</button>
</form>