<form action="EX009.php" method="post">
    Digite sua frase: <input type="text" name="nome"><br>
    <button type="submit">Enviar</button>

</form>

<?php
$frase = $_POST['nome'];

echo 'A frase "'.$frase.'" tem '.strlen($frase). " Caracteres:<br>";
echo 'A frase "'.$frase.'" tem '.str_word_count($frase)." palavras <br>";
echo 'A frase "'.$frase.'" em reverso: '.strrev($frase)."<br>";
?>