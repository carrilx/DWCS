<?php
    require_once "src/VideoJuegoDAO.php";

    $videoJuegos = VideoJuegoDAO::getVideoJuegos();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/listar_equipos.css">
    <title>Videojuegos</title>
</head>
<body>
    <h1>Videojuegos registrados</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Plataforma</th>
            <th>Año</th>
            <th>Género</th>
        </tr>
        <!-- Datos de ejemplo. Tiene que ser dinámico -->
        <?php
            foreach($videoJuegos as $videoJuego){
              echo "  <tr>";
              echo "  <td>" . $videoJuego->getNombre() . "</td>";
              echo "  <td>".$videoJuego->getPlataforma()."</td>";
              echo "      <td>". $videoJuego->getAnoLanz() ."</td>";
              echo "      <td>". $videoJuego->getGenero() ."</td>";
              echo "      <td><a href=\"editar_videojuego.php?id=". $videoJuego->getId() . "\">Editar</a></td>";
              echo "      <td><a href=\"eliminar_videojuego.php?id=". $videoJuego->getId() . "\">Eliminar</a></td>";
              echo "  </tr>";
            }
        ?>
        <tr>
            <td>Minecraft</td>
            <td>PC</td>
            <td>2011</td>
            <td>Sandbox</td>
            <td><a href="altamodificacion.php?id=3">Editar</a></td>
            <td><a href="eliminar.php?id=3">Eliminar</a></td>
        </tr>
        <tr>
            <td>Fortnite</td>
            <td>PC</td>
            <td>2017</td>
            <td>Battle Royale</td>
            <td><a href="altamodificacion.php?id=3">Editar</a></td>
            <td><a href="eliminar.php?id=3">Eliminar</a></td>
        </tr>
    </table>

</body>
</html>
