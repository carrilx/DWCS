<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis ejercicios</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <header>
        <h1>Ejercicios</h1>
        <h2>UD1</h2>
    </header>

    <?php

        $archivos = scandir(".");

        echo "<ul>";

            foreach ($archivos as $archivo) {

                if (str_ends_with($archivo, ".php") && $archivo != "index.php") {

                    echo "<li>";
                    echo "<a href='$archivo'>$archivo</a>";
                    echo "</li>";
                }
            }

        echo "</ul>";

    ?>

</body>

</html>
