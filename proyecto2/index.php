<?php

include ("TablaMultiplicar.php");
include ("Fibonacci.php");
include ("DibujaTabla.php");

$a = 23;
$b = 11;

$arrayTabla = TablaMultiplicar($a, $b);
$arraySerie = Fibonacci($b);

DibujaTabla($arrayTabla);
DibujaTabla($arraySerie);

