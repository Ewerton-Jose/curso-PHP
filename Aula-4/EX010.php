<?php

$palavra = $_POST['palavra'];

echo "Sua palavra em maiúsculo: ". strtoupper($palavra);
echo "<br>Sua palavra em menúsculo: ". strtolower($palavra);
echo "<br>Sua palavra em capitalize: ". ucwords(strtolower($palavra));

?>

<form action="EX010.php" method="post">
    Digite uma palavra: <input name="palavra" type="text">
    <button type="submit">Enviar</button>
</form>