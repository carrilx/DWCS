<?php
class Equipo
{
    private int $id;
    private string $nombre;
    private int $integrantes;
    private string $mail;
    private float $puntuacion;

    public function getId(): int
    {
        return $this->id;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getIntegrantes(): int
    {
        return $this->integrantes;
    }
    public function getMail(): string
    {
        return $this->mail;
    }
    public function getPuntuacion(): float
    {
        return $this->puntuacion;
    }

    function __construct(int $id, string $nombre, int $integrantes, string $mail, float $puntuacion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->integrantes = $integrantes;
        $this->mail = $mail;
        $this->puntuacion = $puntuacion;
    }

    public static function desdeArray(array $fila):Equipo{
        return new Equipo(
            (int) $fila['id_equipo'],
            (string)  $fila['nombre'],
            (int) $fila['num_integrantes'],
            (string) $fila['email'],
            (float) $fila['puntuacion']
        );
    }
}