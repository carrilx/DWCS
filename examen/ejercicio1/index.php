<?php
$entrada = "Hola, esto es una prueba.";

function analisisFrecuencia($entrada):array{
    $noValidos = [" ", ",", "."];
    $newValidos= "";
    $entrada = array_count_values(str_split(str_replace($noValidos, $newValidos, strtoupper($entrada))));
    return $entrada;
}

print_r(analisisFrecuencia($entrada));