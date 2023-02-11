<?php

$numero = 10;
$resultado = 1;

for ($i = 1; $i <= $numero; $i++) {
    $resultado *= $i;
  }
  
  echo "O fatorial de " . $numero . " é: " . $resultado . "<br>";

?>