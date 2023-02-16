<?php

echo $_GET['valor'].'<br>'.$_GET['valor2'];

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Digite um dado: <input name='valor' value="Digite aqui" type="text"><br>
    Digite outro dado: <input name='valor2' value="Digite aqui" type="text">  
    <input type="submit" value="Enviar">
</form>