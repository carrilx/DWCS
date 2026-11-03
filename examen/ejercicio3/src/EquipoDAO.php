<?php

require_once "src/Db.php";
require_once "src/Equipo.php";

class EquipoDAO {
    /**
     * Obtiene los equipos almacenados en la base de datos.
     *
     * Permite filtrar los resultados por nombre y establecer
     * el criterio de ordenación mediante los parámetros recibidos.
     *
     * @param string $filtros Texto utilizado para filtrar por nombre.
     * @param string $orden Campo por el que se ordenarán los resultados.
     * @return array Array de objetos Equipo.
     */
    public static function getEquipos($filtros, $orden) {

        // Obtiene la conexión con la base de datos.
        $db = Db::getConnection();

        // Consulta inicial: permite recuperar todos los equipos.
        $sql = "SELECT * FROM equipos WHERE 1=1";
        $params = [];

        // Si se recibe un filtro, limita los resultados por nombre.
        // Se utilizan parámetros preparados para evitar inyecciones SQL.
        if ($filtros != "") {
            $sql .= " AND nombre LIKE :nombre";
            $params['nombre'] = "%$filtros%";
        }

        // Define los únicos campos permitidos para ordenar los resultados.
        $valoresPermitidosOrden = [
            'nombre',
            'num_integrantes',
            'puntuacion'
        ];

        // Añade el criterio de ordenación solicitado.
        // Si el campo no está permitido, ordena por nombre por defecto.
        if (in_array($orden, $valoresPermitidosOrden)) {
            $sql .= " ORDER BY $orden";
        } else {
            $sql .= " ORDER BY nombre";
        }

        // Prepara y ejecuta la consulta con los parámetros correspondientes.
        $resultado = $db->prepare($sql);
        $resultado->execute($params);

        // Recupera los resultados y los transforma en objetos Equipo.
        $equipos = [];

        while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $equipos[] = Equipo::desdeArray($fila);
        }

        // Libera la conexión y devuelve el listado de equipos.
        $db = null;

        return $equipos;
    }


    /**
     * Busca un equipo a partir de su identificador.
     *
     * @param int $id Identificador del equipo que se desea consultar.
     * @return Equipo|null Devuelve el equipo encontrado o null si no existe.
     */
    public static function getEquipoPorId($id): Equipo|null {

        // Obtiene la conexión con la base de datos.
        $db = Db::getConnection();

        // Consulta para recuperar un único equipo por su identificador.
        $sql = "SELECT * FROM equipos WHERE id_equipo = :id";

        // Asocia el identificador al parámetro de la consulta.
        $params = [
            'id' => $id
        ];

        // Prepara y ejecuta la consulta.
        $resultado = $db->prepare($sql);
        $resultado->execute($params);

        // Recupera el registro encontrado, si existe.
        $fila = $resultado->fetch(PDO::FETCH_ASSOC);

        if ($fila != false) {
            return Equipo::desdeArray($fila);
        } else {
            return null;
        }
    }


    /**
     * Actualiza los datos de un equipo existente.
     *
     * Modifica el correo electrónico, el número de integrantes
     * y la puntuación del equipo cuyo identificador se proporciona.
     *
     * @param Equipo $equipo Objeto Equipo con los nuevos datos.
     * @return bool Indica si la ejecución de la consulta ha sido correcta.
     */
    public static function modificarEquipo($equipo) {

        // Obtiene la conexión con la base de datos.
        $db = Db::getConnection();

        // Consulta SQL para actualizar los datos del equipo.
        $sql = "
            UPDATE equipos SET
                email = :email,
                num_integrantes = :integrantes,
                puntuacion = :puntuacion
            WHERE id_equipo = :id
        ";

        // Asocia cada parámetro con el valor correspondiente del objeto.
        $params = [
            'id' => $equipo->getId(),
            'email' => $equipo->getMail(),
            'integrantes' => $equipo->getIntegrantes(),
            'puntuacion' => $equipo->getPuntuacion()
        ];

        // Prepara y ejecuta la actualización.
        $resultado = $db->prepare($sql);

        return $resultado->execute($params);
    }
}