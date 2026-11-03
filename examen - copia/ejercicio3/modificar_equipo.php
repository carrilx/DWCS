<?php
require_once "src/EquipoDAO.php";
require_once "src/Equipo.php";


if($_SERVER['REQUEST_METHOD'] =='GET') {
    $id = $_GET['id'] ?? null;
    $equipo = EquipoDAO::getEquipoPorId($id);
}else {
    //recogemos variables
    $id= $_GET['id'] ?? null;
    $equipo = EquipoDAO::getEquipoPorId($id);
    $nombre = $equipo->getNombre(); 
    $email = $_POST['email'];
    $integrantes = $_POST['num_integrantes'];
    $puntuacion = $_POST['puntuacion'];
    $errores = [];

    //validamos las variables
    $emailLimpio = filter_var($email, FILTER_SANITIZE_EMAIL);
    $emailValid = filter_var($emailLimpio, FILTER_VALIDATE_EMAIL);
    $integrantesValid = filter_var($integrantes, FILTER_VALIDATE_INT, [
        "options" => [
            "min_range" => 2,
            "max_range" => 5
        ]
    ]);
    $puntuacionValid = filter_var($puntuacion, FILTER_VALIDATE_FLOAT);

    //añadimos errores si los hay
    if($emailValid == false) {$errores[] = "Email incorrecto";};
    if($integrantesValid == false) {$errores[] = "Número de integrantes incorrecto";};
    if($puntuacionValid == false) {$errores[] = "Puntuación incorrecta";};
    
    //si no hay errores ejecutamos la modificacion del equipo
    if(empty($errores)){
        $equipo = new  Equipo ($id, $nombre, $integrantesValid, $emailValid, $puntuacionValid);
        EquipoDAO::modificarEquipo($equipo);
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/modificar_equipo.css">
    <title>Modificar equipo</title>
</head>

<body>
    <h1>Actualizar datos de equipo</h1>
    <fieldset>
        <!-- El nombre del equipo debe ser dinámico -->
        <legend><?php echo $equipo->getNombre()?></legend>
        <form method="post">
            <!-- Los valores de los inpunts deben corresponderse con los valores actuales que deben obtenerse dinámicamente -->
            <label for="email">Correo de contacto</label>
                <input type="text" name="email" value="<?php echo $equipo->getEmail()?>">
            <label for="num_integrantes">Nº Integrantes</label>
                <input type="text" name="num_integrantes" class="input_pequeno" value="<?php echo $equipo->getIntegrantes()?>">
            <label for="puntuacion">Puntuación</label>
                <input type="text" name="puntuacion" class="input_pequeno" value="<?php echo $equipo->getPuntuacion()?>">
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
                echo "</ul>";
            }
        ?>
    </div>
</body>