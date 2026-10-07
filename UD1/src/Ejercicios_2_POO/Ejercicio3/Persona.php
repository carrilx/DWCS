<?php

include "Direccion.php";

class Persona {
    private string $nombre;
    private int $edad;
    private Direccion $direccion;
    
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
        if ($edad>0) {
            $this->edad=$edad;
            return $this;
        }else {
            echo "La edad debe ser mayor que 0";
        }
    }

    public function esMayorEdad():bool{
        $mayoriaEdad = 18;
        if ($this->edad>=$mayoriaEdad){
            return true;
        } else {
            return false;
        }
    }

    public function mostrarDireccion(){
        echo $this->direccion->getCalle();
        echo $this->direccion->getCiudad();
        echo $this->direccion->getCodPost();

    }
}