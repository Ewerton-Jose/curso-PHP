<?php

$dados = [$_POST['dado1'],$_POST['dado2'],$_POST['dado3']];
array_unshift($dados, 'Valor Adicional 1', "valor adicional 2");
echo "<h1>A quantidade de dados do array é: ".count($dados)."<h1>";

?>

<form action="EX011.php" method="post">
    <h2>Digite dados: </h2>
    dado 1: <input name="dado1" type="text"> <br>
    dado 2: <input name="dado2" type="text"> <br>
    dado 3: <input name="dado3" type="text"> <br>
    <button type="submit">Enviar</button>
</form>