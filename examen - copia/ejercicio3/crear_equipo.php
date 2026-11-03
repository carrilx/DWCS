<?php
    require_once "src/EquipoDAO.php";
    require_once "src/Equipo.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $integrantes = $_POST['num_integrantes'];
    $puntuacion = $_POST['puntuacion'];
    $errores = [];

    $nombreValid = trim($nombre);
    $emailSanitize = filter_var($email, FILTER_SANITIZE_EMAIL);
    $emailValid = filter_var($emailSanitize, FILTER_DEFAULT);
    $integrantesValid = filter_var($integrantes, FILTER_DEFAULT);
    $puntuacionValid = filter_var($puntuacion, FILTER_DEFAULT);

    if($nombreValid == false){$errores[]= "Nombre incorrecto";}
    if($emailValid == false){$errores[]= "Email incorrecto";}
    if($integrantesValid == false){$errores[]= "Numero de integrantes incorrecto";}
    if($puntuacionValid == false){$errores[]= "Puntuacion incorrecta";}

    if(empty($errores)){
        $equipo = new Equipo(null, $nombreValid, $integrantesValid, $emailValid, $puntuacionValid);
        EquipoDAO::crearEquipo($equipo);
    }
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/modificar_equipo.css">
    <title>Crear Equipo</title>
</head>

<body>
    <h1>Crear equipo</h1>
    <fieldset>
        
        <form method="post">

            <label for="nombre">Nombre del equipo:</label>
                <input type="text" name="nombre" >
            <label for="email">Correo de contacto</label>
                <input type="text" name="email">
            <label for="num_integrantes">Nº Integrantes</label>
                <input type="text" name="num_integrantes" class="input_pequeno">
            <label for="puntuacion">Puntuación</label>
                <input type="text" name="puntuacion" class="input_pequeno">
            <div class="form-buttons">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="listar_equipos.php" class="btn btn-cancel">Cancelar</a>
            </div>
        </form>
    </fieldset>
    <div>
        <?php
            if($errores != []){
                echo "<ul>";
                    echo "<li>" . $errores[0] . "</li>";
                    echo "<li>" . $errores[1] . "</li>";
                    echo "<li>" . $errores[2] . "</li>";
                    echo "<li>" . $errores[3] . "</li>";
                echo "</ul>";
            }
        ?>
    </div>
</body>