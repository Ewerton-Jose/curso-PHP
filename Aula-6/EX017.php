<?php

$num = $_POST["d1"];

if ($num % 3 == 0 or $num % 5 == 0){
    echo "O número $num é divisvel por 5 ou 3";
} else {
    echo "O número $num NÃO é divisvel por 5 ou 3";
}

?>

<form action="EX017.php" method="post">
    Número: <input step="any" type="number" name="d1" id="">
    <button type="submit">Enviar</button>
</form>