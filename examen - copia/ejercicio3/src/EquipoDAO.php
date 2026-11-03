<?php
require_once "src/Db.php";
require_once "src/Equipo.php";
class EquipoDAO {
    public static function getEquipos($filtros, $orden){
        $db = Db::getConnection();
        $sql = "SELECT * FROM equipos WHERE 1=1";
        $params = [];

        //filtrar por nombre
        if($filtros != ""){
            $sql .= " AND nombre LIKE :nombre";
            $params['nombre'] = "%$filtros%";
        }

        //ordenar
        $valoresPermitidosOrden = [
            'nombre',
            'num_integrantes',
            'puntuacion'
        ];

        if(in_array($orden, $valoresPermitidosOrden)){
            $sql .= " ORDER BY $orden";
        }else{
            $sql .= " ORDER BY nombre";
        }

        //ejecutar consulta
        $resultado = $db->prepare($sql);
        $resultado->execute($params);

        //recuperar resultados y convertirlos en objeto
        $equipos = [];

        while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
            $equipos[] = Equipo::desdeArray($fila);
        }

        $db = null;
        return $equipos;
    }

    public static function getEquipoPorId($id){
        $db = Db::getConnection();
        $sql = "SELECT * FROM equipos WHERE  id_equipo = :id";
        $params = ['id'=>$id];
        $resultado = $db->prepare($sql);
        $resultado->execute($params);
        $fila = $resultado->fetch(PDO::FETCH_ASSOC);

        if($fila!=false){
            return Equipo::desdeArray($fila);   
        }else{
            return null;
        }
    }

    public static function modificarEquipo($equipo){
        $db = Db::getConnection();
        $sql = "UPDATE equipos SET 
                    email = :email,
                    num_integrantes = :integrantes,
                    puntuacion = :puntuacion
                WHERE id_equipo = :id
                ";
        $params = [
            'id'=>$equipo->getId(),
            'email'=>$equipo->getEmail(),
            'integrantes' =>$equipo->getIntegrantes(),
            'puntuacion' =>$equipo->getPuntuacion()
            ];
        $resultado = $db->prepare($sql);
        return $resultado->execute($params);
        
    }


    public static function crearEquipo($equipo){
        $db = Db::getConnection();
        $sql = "INSERT INTO equipos (nombre, email, num_integrantes, puntuacion) VALUES (
                    :nombre,
                    :email,
                    :integrantes,
                    :puntuacion
                )";
        $params = [
            'nombre'=>$equipo->getNombre(),
            'email'=>$equipo->getEmail(),
            'integrantes' =>$equipo->getIntegrantes(),
            'puntuacion' =>$equipo->getPuntuacion()
            ];
        $resultado = $db->prepare($sql);
        return $resultado->execute($params);
        
    }

}