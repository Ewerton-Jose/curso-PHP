<?php

$senha = "banana";

$senha_hash = password_hash('banana', PASSWORD_DEFAULT);


if (password_verify($senha, $senha_hash)){
    echo "Senha corresponde";
}

else{
    echo "Senha não corresponde";
}


?>