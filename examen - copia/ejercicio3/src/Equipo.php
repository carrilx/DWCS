<?php
class Equipo {
    private ?int $id;
    private string $nombre;
    private int $integrantes;
    private string $email;
    private float $puntuacion;

    public function getId(){return $this->id;}
    public function getNombre(){return $this->nombre;}
    public function getIntegrantes(){return $this->integrantes;}
    public function getEmail(){return $this->email;}
    public function getPuntuacion(){return $this->puntuacion;}

    public function __construct(?int $id, $nombre, $integrantes, $email, $puntuacion){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->integrantes = $integrantes;
        $this->email = $email;
        $this->puntuacion = $puntuacion;
    }

    public static function desdeArray(array $fila){
        return new Equipo(
            (int)$fila['id_equipo'],
            (string)$fila['nombre'],
            (int)$fila['num_integrantes'],
            (string)$fila['email'],
            (float)$fila['puntuacion']
        );
    }

}