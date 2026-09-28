<?php 
$a = $_POST["num1"];
$b = $_POST["num2"];
function potencia($a, $b) {
    return $a**$b;
}
echo potencia($a, $b);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
</head>
<body>
    <h1>Calcular potencias</h1>
    <form action="ejercicio8.php" method="post">
        <label for="num1">Escribe el numero:</label>
        <input type="number" name="num1">
        <label for="num2">Escribe la potencia que quieras:</label>
        <input type="number" name="num2">
        <input type="submit">
    </form>
</body>
</html>