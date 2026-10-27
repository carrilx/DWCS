<?php
class Videojuego
{
    //propiedaddes
    private ?int $id;
    private $nombre;
    private $plataforma;
    private $anoLanz;
    private $genero;

    //getters y setters

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getPlataforma(): string
    {
        return $this->plataforma;
    }
    public function getAnoLanz(): int
    {
        return $this->anoLanz;
    }
    public function getGenero(): int
    {
        return $this->genero;
    }


    public function __construct($id, $nombre, $plataforma, $anoLanz, $genero)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->plataforma = $plataforma;
        $this->anoLanz = $anoLanz;
        $this->genero = $genero;
    }

    /**
     * El array tiene el formato ['']
     */
    public static function fromArray(array $fila):Videojuego{
        return new Videojuego(
            $fila['id'],
            $fila['nombre'],
            $fila['plataforma'],
            $fila['anoLanz'],
            $fila['genero']
        );
    }

}
