<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
echo "<body style = 'font-family: Arial';>";
echo "<h1>Tablas de multiplicar</h1>";

for ($tabla=1; $tabla <= 10; $tabla++) { 
    echo "<h3>Tabla del $tabla</h3>";
    echo "<table border ='1px' style='border-collapse: collapse; border: 1px solid gray';'>";

    for ($i=1; $i <= 10; $i++) { 
        $resul = $tabla * $i;
        echo "<tr>";
        echo "<td style='padding: 5px; border: 1px solid gray';'>$tabla x $i = $resul</td>";
        echo "</tr>";
    } 
    echo "</table>";
    echo "<br>";
}
echo "</body>"
?>
</body>
</html>