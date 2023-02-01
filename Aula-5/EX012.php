<?php

$numeros = [$_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4'], $_POST['n5']];
echo "<h1>A soma entre os numeros do array é: ".array_sum($numeros)."</h1>";

?>

<form action="EX012.php" method="post">
    <h2>Digite 5 números e veja a sua soma</h2>
    Número 1: <input name="n1" type="number"> <br>
    Número 2: <input name="n2" type="number"> <br>
    Número 3: <input name="n3" type="number"> <br>
    Número 4: <input name="n4" type="number"> <br>
    Número 5: <input name="n5" type="number"> <br>
    <button type="submit">Enviar</button>
</form>