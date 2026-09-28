
<?php
$numero = $_POST["numero"];
if(ctype_digit($numero)){
    if ($numero > 0) {
        echo "$numero es positivo";
    } elseif ($numero == 0) {
        echo "$numero es cero";
    } else {
        echo "$numero es negativo";
    }
}else {
    echo "Eso no es un número.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Positivo, negativo</title>
</head>
<body>

    <h1>Comprobar número</h1>

    <form action="ejercicio6.php" method="post">

        <label for="numero">Introduce un número:</label>
        <input type="text" id="numero" name="numero">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>