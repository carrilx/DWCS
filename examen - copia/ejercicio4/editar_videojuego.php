<?php
    require_once "src/VideoJuegoDAO.php";
    require_once "src/VideoJuego.php";

    if($_SERVER['REQUEST_METHOD']== 'GET'){
        $id = $_GET['id'] ?? null;
        $videojuego = VideoJuegoDAO::getVideoJuegoPorId($id);
    }else{
        $id = $_GET['id'] ?? null;
        $videojuego = VideoJuegoDAO::getVideoJuegoPorId($id);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/modificar_equipo.css">
    <title>Editar Videojuego</title>
</head>
<body>
    <h1>Editar Videojuego</h1>
    <fieldset>
        <form method="post">
            <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $videojuego->getNombre()?>">
            <label for="plataforma">Plataforma</label>
                <input type="text" name="plataforma" value="">
            <label for="anoLanz">Año de lanzamiento</label>
                <input type="text" name="anoLanz" value="">
            <label for="genero">Genero</label>
                <input type="text" name="genero" value="">
            <div class="form-buttons">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="listar_equipos.php" class="btn btn-cancel">Cancelar</a>
            </div>
        </form>
    </fieldset>
    
</body>
</html>