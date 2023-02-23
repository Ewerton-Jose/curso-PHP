<?php

$senha = "Banana";

echo "Senha: $senha <br>";

echo "Senha base64: ".base64_encode($senha)."<br>";
echo "Senha md5: ".md5($senha)."<br>";
echo "Senha sha1: ".sha1($senha)."<br>";


?>