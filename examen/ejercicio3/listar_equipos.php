<?php
    require_once "src/EquipoDAO.php";
    $filtros = $_GET['nombre'];
    $orden = $_GET['orden'] ?? 'nombre';
    $equipos = EquipoDAO::getEquipos($filtros, $orden);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/listar_equipos.css">
    <title>Listado de equipos</title>
</head>
<body>
    <h1>Lista de equipos</h1>
    <fieldset>
        <legend>Filtro de equipos</legend>
        <form method="get">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <button type="submit">Filtrar</button>
        </form>
    </fieldset>
    <table>
        <tr>
            <?php
            echo "<th><a href=\"listar_equipos.php?orden=nombre&nombre=".$filtros."\">Nombre</a></th>";
            echo "<th>Email</th>";
            echo "<th><a href=\"listar_equipos.php?orden=num_integrantes&nombre=".$filtros."\">Participantes</a></th>";
            echo "<th><a href=\"listar_equipos.php?orden=puntuacion&nombre=".$filtros."\">Puntuación</a></th>";
            ?>
        </tr>
        <!-- Esto tiene que ser dinámico -->
         <?php
            foreach($equipos as $equipo){
            echo "<tr>";
            echo "<td>" . $equipo->getNombre() . "</td>";
            echo "<td>". $equipo->getMail() ."</td>";
            echo "<td>". $equipo->getIntegrantes() ."</td>";
            echo "<td>" . $equipo->getPuntuacion() ."</td>";
            echo "<td><a href=\"modificar_equipo.php?id=". $equipo->getId() ."\">Editar</a></td>";
            echo "</tr>";
            }
         ?>
    </table>
</body>
</html>