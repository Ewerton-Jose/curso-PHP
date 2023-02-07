<?php

$str = $_POST["n1"];

if (strlen($str) == 0){
    echo "A frase está vazia";
} else {
    echo "A frase $str tem ".strlen($str)." Caracteres, NÃO ESTÁ vazia";
}

?>

<form action="EX016.php" method="post">
    str: <input type="text" value="" name="n1" id="">
    <button type="submit">Enviar</button>
</form>