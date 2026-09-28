<?php

function calcularMayor()
{
    $nums = $_POST["nums"];
    $numeroMayor = $nums[0];
    for ($i = 0; $i < count($nums); $i++) {
        if ($numeroMayor < $nums[$i]) {
            $numeroMayor = $nums[$i];
        }
    }
    return $numeroMayor;
}
echo calcularMayor();

function calcularMenor(){
    $nums = $_POST["nums"];
    $numeroMenor = $nums[0];
    for ($i = 0; $i < count($nums); $i++) {
        if ($numeroMenor < $nums[$i]) {
            $numeroMenor = $nums[$i];
        }
    }
}

function calcularMedia(){
    $nums = $_POST["nums"];
    $mediaNum = array_sum($nums)/ count($nums);
    return $mediaNum;
}

echo calcularMedia();



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
        <style>
            fieldset {
                justify-content: center;
                display: flex;
                width: 200px;
                margin: 20px;
                border-radius: 10px;
                flex-direction: column;
            }
        </style>
    </head>

    <body>
        <h1>Mayor, menor y media de los elementos de un array</h1>
        <form action="ejercicio9.php" method="post">
            <fieldset>
                <label for="num1">Escribe aquí el primer número:</label>
                <input type="number" name="nums[]">
            </fieldset>

            <fieldset>
                <label for="num1">Escribe aquí el segundo número:</label>
                <input type="number" name="nums[]">

            </fieldset>
            <fieldset>
                <label for="num1">Escribe aquí el tercer número:</label>
                <input type="number" name="nums[]">

            </fieldset>
            <fieldset>    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
        <style>
            fieldset {
                justify-content: center;
                display: flex;
                width: 200px;
                margin: 20px;
                border-radius: 10px;
                flex-direction: column;
            }
        </style>
    </head>

    <body>
        <h1>Mayor, menor y media de los elementos de un array</h1>
        <form action="ejercicio9.php" method="post">
            <fieldset>
                <label for="num1">Escribe aquí el primer número:</label>
                <input type="number" name="nums[]">
            </fieldset>

            <fieldset>
                <label for="num1">Escribe aquí el segundo número:</label>
                <input type="number" name="nums[]">

            </fieldset>
            <fieldset>
                <label for="num1">Escribe aquí el tercer número:</label>
                <input type="number" name="nums[]">

            </fieldset>
            <fieldset>
                <label for="num1">Escribe aquí el cuarto número:</label>
                <input type="number" name="nums[]">

            </fieldset>
            <fieldset>
                <label for="num1">Escribe aquí el quinto número:</label>
                <input type="number" name="nums[]">

            </fieldset>

            <fieldset>
                <input type="submit">

            </fieldset>
        </form>
    </body>
                <label for="num1">Escribe aquí el cuarto número:</label>
                <input type="number" name="nums[]">

            </fieldset>
            <fieldset>
                <label for="num1">Escribe aquí el quinto número:</label>
                <input type="number" name="nums[]">

            </fieldset>

            <fieldset>
                <input type="submit">

            </fieldset>
        </form>
    </body>

</html>