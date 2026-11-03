<?php
require_once "src/bd.php";
require_once "src/Videojuego.php";

$db = Bd::getConection();

$videoJuego = new Videojuego(null, "Zelda", "xbox", 1989, "aventura");

function addGame($eovidJuego){
    try {
        $sql = "INSERT INTO "
        $statement =  
    } catch (\Throwable $th) {
        //throw $th;
    }
}