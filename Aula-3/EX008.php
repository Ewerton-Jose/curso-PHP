<form action="EX008.php" method="post">
    Qual o número: <input type="number" step="any" name="n1">
    Quantas possíveis casas: <input type="number" name="n2">
    <button type="submit">Enviar</button>
</form>

<?php

$numero = $_POST['n1'];
$casas = $_POST['n2'];
echo "A raíz quadrada de $numero é ".  number_format(sqrt($numero), $casas,',', '.').'...';

?>