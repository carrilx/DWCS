<?php
require_once "src/Db.php";
require_once "src/VideoJuego.php";
class VideoJuegoDAO {
    public static function getVideoJuegos(){
        $db = Db::getConnection();
        $videoJuegos = [];
        $sql = "SELECT * FROM videojuegos WHERE 1=1";
        $resultado = $db->prepare($sql);
        $resultado->execute();
        while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
            $videoJuegos[] = VideoJuego::desdeArray($fila);
        }
        $db = null;
        return $videoJuegos;
    }

    public static function getVideoJuegoPorId($id){
        $db = Db::getConnection();
        $sql = "SELECT * FROM videojuegos WHERE id = :id";
        $params = ['id' => $id];
        $resultado = $db->prepare($sql);
        $resultado->execute($params);

        $fila = $resultado->fetch(PDO::FETCH_ASSOC);

        if($fila != false){
            return VideoJuego::desdeArray($fila);
        }else{
            return null;
        }

    }

    public static function editarVideojuego($videoJuego){
        $db = Db::getConnection();
        $sql = "UPDATE videojuegos SET 
                nombre = :nombre,
                plataforma = :plataforma,
                anio_lanzamiento = :anoLanz,
                genero = :genero
                WHERE id = :id
         ";
        $params = [
            'nombre' => $videoJuego->getNombre(),
            'plataforma' => $videoJuego->getPlataforma(),
            'anoLanz' => $videoJuego->getAnoLanz(),
            'genero' => $videoJuego->getGenero(),
            'id' => $videoJuego->getId()
        ];
        $resultado = $db->prepare($sql);
        return $resultado->execute($params);
    }

    public static function eliminarVideoJuego($id){
        $db = Db::getConnection();
        $sql = "DELETE FROM videojuegos WHERE id = :id";
        $params = ['id'=> $id];
        $resultado = $db->prepare($sql);
        return $resultado->execute($params);
    }
}