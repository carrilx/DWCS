<?php
include "Estudiante.php";

function calcularPromedio():string{
    $notas = $_POST["notas"];
    $notas = explode("-", $notas);
    $promedio = Estudiante::calcularPromedio($notas);
    return $promedio;
}



