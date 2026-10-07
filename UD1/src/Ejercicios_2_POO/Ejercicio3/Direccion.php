<?php

class Direccion{
    private string $calle;
    private string $ciudad;
    private int $codPost;

    public function __construct(string $calle, string $ciudad, int $codPost)
    {
        $this->calle = $calle;
        $this->ciudad = $ciudad;
        $this->codPost = $codPost;
    }

    public function getCalle(){
        return $this->calle;
    }
    public function getCiudad(){
        return $this->ciudad;
    }
    public function getcodPost(){
        return $this->codPost;
    }

    public function setCalle(string $calle){
        $this->calle = $calle;
        return $this;
    }public function setCiudad(string $ciudad){
        $this->ciudad = $ciudad;
        return $this;
    }public function setCodPost(int $codPost){
        $this->codPost = $codPost;
        return $this;
    }

    //Función para utilizar desde Persona(El ejercicio pide hacerla en Persona)
    public function mostrarDireccion(){
        echo $this->getCalle();
        echo $this->getCiudad();
        echo $this->getCodPost();
    }
}