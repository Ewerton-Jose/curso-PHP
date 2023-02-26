<form action="ex032.php" method="post">
    Data de nascimento <input name='aniversario' id="date" type="date">
    <button type="submit">Enviar</button>
</form>

<?php

date_default_timezone_set('America/Recife');

$data_atual = date_create('now');
$data_nascimento = date_create($_POST['aniversario']);
$intervalo = date_diff($data_nascimento, $data_atual);

echo $intervalo->format('Você viveu %R%a dias');

?>