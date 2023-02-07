<?php

$num = $_POST["d1"];

#if ( )

if($num == 2 or $num == 3 or $num == 5){
    echo "O número $num é primo";
}

elseif( $num % 2 == 0 or $num % 3 == 0 or $num % 5 == 0){
    echo "O número $num Não é primo";
}

else{
    echo "O número $num é primo";
}

?>

<form action="EX019.php" method="post">
    Número: <input step="any" type="number" name="d1" id="">
    <button type="submit">Enviar</button>
</form>