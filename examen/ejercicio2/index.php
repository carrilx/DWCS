<?php

/**
 * /RECURSIVA
 * @param mixed $n Entrada int, para saber la posición en la serie de fibonnacci 
 * @return int con el valor en dicha posición
 */
function fibo($n):int {

    if($n == 0){
        return 0;
    }
    if($n == 1){
        return 1;
    }
    return fibo($n-1) + fibo($n-2);
}

print_r(fibo(8));

/**
 * / ITERATIVA
 * @param mixed $n Entrada int, para saber la posición en la serie de fibonnacci 
 * @return int con el valor en dicha posición
 */
function fiboIt($n):int{
    $anterior = 0;
    $actual = 1;

    for($index=1; $index<$n; $index++){
        $siguiente = $anterior + $actual;
        $anterior = $actual;
        $actual = $siguiente;
    }
    return $siguiente;

}

print_r(fiboIt(8));