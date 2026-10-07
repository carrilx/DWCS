<?php

class Persona {
    private string $nombre;
    private int $edad;
    
    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getnombre(){
        return $this-> nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad(string $edad){
        $this->edad=$edad;
        return $this;
    }

}