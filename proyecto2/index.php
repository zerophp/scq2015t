<?php

include ("TablaMultiplicar.php");
include ("Fibonacc.php");
include ("DibujaTabla.php");

$a = 23;
$b = 21;

$arrayTabla = TablaMultiplicar($a, $c);
$arraySerie = Fibonacci($b);

DibujaTabla($arrayTabla);
DibujaTabla($arraySerie);

