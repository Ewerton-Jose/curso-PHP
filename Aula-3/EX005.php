<form action="EX005.php" method="post">
    Qual é seu nome: <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<?php

$nome = $_POST["nome"];
echo "Bom dia, $nome!!";

?>