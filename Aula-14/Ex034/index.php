<?php 

require_once 'php-actions/connect.php';
include_once 'includes/header.html';
session_start();
?>
    <form action="index.php" method="post">
        <label for="user">Usuário: </label>
        <input type="text" name="user">
        <br>
        <label for="key">Sua senha: </label>
        <input type="text" name="senha">
        <br>
        <input type="submit" name="btn"></input>
    </form>

<?php

if ( isset($_POST["btn"])){ //Verificando pra ver se o botão foi apertado
    $senha = $_POST["senha"];
    $user = $_POST["user"];
}


$sql = "SELECT * FROM pessoa"; //Código SQL
$resultado = mysqli_query($conexao,$sql); //Pegando os dados

while ($dados = mysqli_fetch_array($resultado)){ //Verificando os dados
    if ($senha == $dados['senha'] && $user == $dados['nickname']){ //Se os dados forem compatíveis
        $_SESSION['logado'] = '1';
        $_SESSION['id'] = $dados['id'];
        header("Location: restrita.php");
        break;
    }
}  

include_once 'includes/footer.html';

?>