<form action="EX006.php" method="post">
    Qual o primeiro número: <input type="number" name="n1">
    Qual o segundo número: <input type="number" name="n2">
    <button type="submit">Enviar</button>
</form>

<?php

$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

echo "$numero1 + $numero2 = ".$numero1 + $numero2."<br>";
echo "$numero1 - $numero2 = ".$numero1 - $numero2."<br>";
echo "$numero1 / $numero2 = ".$numero1 / $numero2."<br>";
echo "$numero1 * $numero2 = ".$numero1 * $numero2."<br>";
echo "$numero1 ** $numero2 = ".$numero1 ** $numero2."<br>";
echo "$numero1 % $numero2 = ".$numero1 % $numero2."<br>";

?>

