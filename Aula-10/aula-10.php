<?php

/* Tempo 

date_default_timezone_set('America/Recife');
Lista de fusos horários suportados: https://www.php.net/manual/pt_BR/timezones.php


Date('') // Mostra o tempo

d - Dia em formato de número
D - Dia da semana com 3 caracteres
l - Dia da semana em str

m - Mes em número
M - Mes em nome

y - o ano em 2 dígitos
Y - o ano em 4 dígitos

h - Hora
i - Minutos
s - segundos
A - PM/AM

date_diff();

$data_atual = date_create('now');
$data_divida = date_create('2024-6-30');
$intervalo = date_diff($data_nascimento, $data_atual);

echo $intervalo->format('Faltam %R%a Dias para a sua conta vencer');

EX032: Pegue a data de nascimento de um usuário e mostre quantos dias ele viveu


*/

date_default_timezone_set('America/Recife');
echo date('d D l /// m M //// y Y /// h:i:s:A');

?>