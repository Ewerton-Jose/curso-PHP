<?php 

require_once 'php-actions/connect.php';
include_once 'includes/header.html';

$sql = "SELECT * FROM pessoa";
$resultado = mysqli_query($conexao,$sql);

while ($dados = mysqli_fetch_array($resultado)){

echo 'Pessoa '.$dados['id'].': <br>';

echo $dados['nome'].'<br>';
echo $dados['email'].'<br>';
echo $dados['telefone'].'<br>';
echo $dados['idade'].'<br>.<br>';
};


include_once 'includes/footer.html';

?>