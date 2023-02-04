<?php

$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$m = ($n1 + $n2 + $n3 + $n4)/4;

echo "Média $m <hr>";

if ($m >= 7){
    echo "Aprovado";
} elseif($m == 6) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}

?>

<form action="EX014.php" method="post">
    Qual o nome do Aluno: <input type="text" name="nome"> <br>
    Qual a primeira nota: <input step="any" type="number" name="n1"> <br>
    Qual a segunda nota: <input step="any" type="number" name="n2"> <br>
    Qual a terceira nota: <input step="any" type="number" name="n3"> <br>
    Qual a quarta nota: <input step="any" type="number" name="n4"> <br>
    <button type="submit">Enviar</button>
</form>
