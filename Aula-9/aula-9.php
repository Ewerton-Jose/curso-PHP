<?php

/* Codificadores */

$senha = 'banana';

// mão dupla
base64_encode($senha); 
base64_decode($senha);

// mão única
md5($senha); // 32 caractéres
sha1($senha);

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);
password_verify($senha, $senha_hash); //verificando





?>