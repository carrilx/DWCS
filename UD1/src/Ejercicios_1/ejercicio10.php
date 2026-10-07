<?php

/**
 * @param $nivel Si existe, genera un array de $nivel números aleatorios.
 * @param $existentes Si existe, los números ya generados para ser apliados con 1 número aleatroio mas.
 */
function generarNumeros(int $nivel = 1, array $existentes = []): array
{
    if (count($existentes) > 0) {
        $existentes[] = rand(1, 4);
        return $existentes;
    }

    $numeros = [];
    for ($i = 0; $i < $nivel; $i++) {
        $numeros[] = rand(1, 4);
    }

    return $numeros;
}

$nivel = $_POST['nivel'] ?? 0;
$nums = $_POST['check_nums'] ?? '';
$inNums = $_POST['in_nums'] ?? '';

//Compruebo si ha perdido o sigue jugando.
if (!empty($nums) && !empty($inNums)) {
    //Falla los números?
    if ($nums !== $inNums) {
        header("Location:ejercicio10_loose.php?nivel=$nivel");
    }
}
$nivel++;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function ocultarNumeros() {
            setTimeout(
                function() {
                    document.getElementById('numeros').classList.add('hidden');
                    document.getElementById('formulario').classList.remove('hidden');
                },
                3000
            );
        }
    </script>
</head>

<body onload="ocultarNumeros()"><?php
    $numerosMaquina= [];
    $numerosJugador= [];
    $numJ = $_POST("numero");
    function generarNum() {
        $numMaquina = random_int(0,5);
        echo $numMaquina;
        $numerosMaquina[] = $numMaquina;
    }

    function comprobarNums($numJ) {

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
    <h1>Simón dice.</h1>
    <form action="ejercicio10.php" method="post">
        <fieldset>
            <label for="numero">Introduce los números de uno en uno:</label>
            <input type="number" name="numero">
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>
    <h1>Simón dice</h1>
    <div id="numeros">
        <?php
        if (empty($inNums)) {
            $nums = implode("-", generarNumeros($nivel));
        } else {
            $nums = implode("-", generarNumeros(
                existentes: explode("-", $inNums)
            ));
        }
        echo $nums;
        ?>
    </div>

    <div id="formulario" class="hidden">
        <form action="" method="post">
            <label for="in_nums">Introduzca los números en orden.</label> <br>
            <input type="text" name="in_nums">
            <input type="hidden" name="nivel" value=<?= $nivel ?>>
            <input type="hidden" name="check_nums" value=<?= $nums ?>>

            <button type="submit">Jugar</button>
        </form>
    </div>

</body>

</html>