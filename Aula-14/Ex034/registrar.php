<?php

require_once "php-actions/connect.php";
require_once "includes/header.html";


session_start();


?>

<form action="php-actions/registraract.php" method="post">
    <label for="Nome">Nome: </label>
    <input type="text" name="nome">
    <br>
    <label for="email">Email: </label>
    <input type="email" name="email" value="">
    <br>
    <label for="tel">Telefone: </label>
    <input type="tel" name="telefone">
    <br>
    <label for="idade">Idade: </label>
    <input type="number" name="idade">
    <br>
    <label for="Nickname">Nickname: </label>
    <input type="text" name="nickname">
    <br>
    <label for="Senha">Senha: </label>
    <input type="key" name="senha">
    <br>
    <button type="submit">registrar</button>
</form>


<?php

require_once "includes/footer.html"

?>