<?php
/**
 * Retorna un array coa serie de Fibonacci
 *
 * @param $max int
 * @return array
 */

function Fibonacci($max) {
    
    $f0 = 0;
    $f1 = 1;
    $f2 = $f0 + $f1;
    $array = [0, 1];
    
    while ($f2 <= $max)
    {
        array_push($array, $f2);        
        $f0 = $f1;
        $f1 = $f2;
        $f2 = $f0+$f1;
    }
    
    return $array;
    // print_r($array);
}

// Fibonacci(38);
