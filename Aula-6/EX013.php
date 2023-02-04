<?php

$d1 = $_POST['d1'];
$d2 = $_POST['d2'];


if($d1 == $d2){
    echo "os dados $d1 e $d2 são iguais";
} else {
    echo "OS dados $d1 e $d1 são diferentes";
}

?>

<form action="EX013.php" method="post">
    Dado 1: <input type="text" name="d1" id="">
    Dado 2: <input type="text" name="d2" id="">
    <button type="submit">Enviar</button>
</form>
