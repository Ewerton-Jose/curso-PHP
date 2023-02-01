<form action="EX007.php" method="post">
    Qual o nome do Aluno: <input type="text" name="nome"> <br>
    Qual a primeira nota: <input step="any" type="number" name="n1"> <br>
    Qual a segunda nota: <input step="any" type="number" name="n2"> <br>
    Qual a terceira nota: <input step="any" type="number" name="n3"> <br>
    Qual a quarta nota: <input step="any" type="number" name="n4"> <br>
    <button type="submit">Enviar</button>
</form>

<?php

$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

echo "<h1>A média do aluno $nome entre $n1, $n2, $n3, $n4 é igual á = ". (($n1 + $n2 + $n3 + $n4)/4)."</h1>";

?>