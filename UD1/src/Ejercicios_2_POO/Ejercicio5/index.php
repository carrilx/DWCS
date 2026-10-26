<?php
    include "Estudiante.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="promedio.php" method="post">
        <label for="notas">Notas separadas por guión:</label>
        <input type="text" name="notas">
        <input type="submit">
    </form>
</body>
</html>