<?php
class VideoJuego {
    private ?int $id;
    private string $nombre;
    private string $plataforma;
    private int $anoLanz;
    private string $genero;

    public function getId(){return $this->id;}
    public function getNombre(){return $this->nombre;}
    public function getPlataforma(){return $this->plataforma;}
    public function getAnoLanz(){return $this->anoLanz;}
    public function getGenero(){return $this->genero;}

    public function __construct(?int $id, $nombre, $plataforma, $anoLanz, $genero){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->plataforma = $plataforma;
        $this->anoLanz = $anoLanz;
        $this->genero = $genero;
    }

    public static function desdeArray(array $fila){
        return new VideoJuego(
            (int)$fila['id'],
            (string)$fila['nombre'],
            (string)$fila['plataforma'],
            (int)$fila['anio_lanzamiento'],
            (string)$fila['genero']
        );
    }

}