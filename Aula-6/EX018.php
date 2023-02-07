<?php

$str = $_POST["n1"];

if (strlen($str) <= 10){
    echo "A frase $str tem 10 ou menos caracteres";
} else {
    echo "A frase $str tem mais de 10 Caracteres";
}

?>

<form action="EX018.php" method="post">
    str: <input type="text" value="" name="n1" id="">
    <button type="submit">Enviar</button>
</form>