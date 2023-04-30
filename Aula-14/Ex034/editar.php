<?php

require_once "php-actions/connect.php";
require_once "includes/header.html";


session_start();
if ($_SESSION['logado'] == '0'){
    header('Location: index.php');
};

$id = $_SESSION['id'];

$sql = "SELECT * FROM pessoa where id = $id";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);

?>

<form action="php-actions/editaract.php" method="post">
    <label for="Nome">Nome: </label>
    <input type="text" name="nome" value="<?php echo $dados['nome'];?>">
    <br>
    <label for="email">Email: </label>
    <input type="email" name="email" value="<?php echo $dados['email'];?>">
    <br>
    <label for="tel">Telefone: </label>
    <input type="tel" name="telefone" value="<?php echo $dados['telefone'];?>">
    <br>
    <label for="idade">Idade: </label>
    <input type="number" name="idade" value="<?php echo $dados['idade'];?>">
    <br>
    <label for="Nickname">Nickname: </label>
    <input type="text" name="nickname" value="<?php echo $dados['nickname'];?>">
    <br>
    <label for="Senha">Senha: </label>
    <input type="key" name="senha" value="<?php echo $dados['senha'];?>">
    <br>
    <button type="submit">Editar</button>
</form>


<?php

require_once "includes/footer.html"

?>