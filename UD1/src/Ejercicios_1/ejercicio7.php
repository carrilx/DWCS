<?php
$palabra1 = $_POST["palabra1"];
$palabra2 = $_POST["palabra2"];

function buscarAnagrama($string1, $string2)
{
    if (strlen($string1)!=strlen($string2)) {
        return false;
    }
    for ($i = 0; $i < strlen($string1); $i++) {  
        $letra = $string1[$i];
        if (substr_count($string1, $letra)!=substr_count($string2, $letra)) {
            return false;
        }
    }
    return true;
}

if (buscarAnagrama($palabra1, $palabra2)) {
    echo " $palabra1 y $palabra2 son anagramas";
} else {
    echo "$palabra1 y $palabra2 no son anagramas";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Palabras anagrama.</h1>
    <form action="ejercicio7.php" method="post">
        <label for="palabra1">Introduce la primera palabra:</label>
        <input type="text" name="palabra1">
        <label for="palabra2">Introduce la segunda palabra</label>
        <input type="text" name="palabra2">
        <input type="submit">
    </form>
</body>

</html>