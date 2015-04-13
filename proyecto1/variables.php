<?php 

$a = "Agustin";

var_dump($a);

echo "<pre>";
print_r($a);
echo "</pre>";

echo "Otra linea 1<br/>"."\n";

echo "Otra linea 2<br/>".'\n';
echo "Otra linea 3<br/>"."\n";
echo "Otra linea 4<br/>";

$a = "Hola";
$b = "mundo";

echo $a . " ". $b;
echo "<br/>";
echo "$a $b";

echo "<br/>";

echo "<hr/>";

$a = "1";
$d = 1;
var_dump($a);
echo "<br/>";

$b = "1";
var_dump($b);
echo "<br/>";

$b = '100';
var_dump($b);
echo "<br/>";

echo "<br/>";
echo $b + $a;

echo "<br/>";
echo $a + $b;

$c = "kaka";
echo "<br/>";

echo $a+$b+$c;

echo $a + $c + $b;

echo $c + $a + $b;



var_dump($a = $b);
var_dump($a == $c);
var_dump($a === $d);

echo "<hr/>";

$a = 1;
$b = 2;

echo $a++;
echo $a;

var_dump($a < $b);
var_dump($a <= $b);
var_dump($a << $b);

echo $a / $b;


echo $a % $b;



















