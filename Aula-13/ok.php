<?php

session_start();
if ($_SESSION['logado'] == '0'){
    header('Location: index.php');
};


?>

<h1>Tudo certo</h1>

<form action="sair.php" method="post">
    <button type="submit">Sair</button>
</form>