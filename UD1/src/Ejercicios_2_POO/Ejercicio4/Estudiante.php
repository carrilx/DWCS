<?php
include "Persona.php";
class Estudiante extends Persona {
    private string $grado;
    public function __construct(string $nombre, int $edad, Direccion $direccion, string $grado)
    {  
        parent::__construct($nombre, $edad, $direccion);
        $this->grado=$grado;
    }

    public function getGrado(){
        return $this->grado;
    }

    public function setGrado(string $grado){
        $this->grado = $grado;
    }

    public function mostrarInformacion(){
        echo $this->getNombre();
        echo $this->getEdad();
        echo $this->getGrado();
    }
}