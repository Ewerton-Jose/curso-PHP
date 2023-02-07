<?php

$num = $_POST["d1"];

if ($num % 2 == 0){
    echo "O número $num é par";
} else {
    echo "O número $num é ímpar";
}

?>

<form action="EX015.php" method="post">
    Número: <input step="any" type="number" name="d1" id="">
    <button type="submit">Enviar</button>
</form>