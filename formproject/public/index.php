<?php

$tini = microtime(true);

for($i=1;$i<=1000;$i++)
{
    $fp=fopen('users.txt', 'w');
    fwrite($fp, 'sss');
    fclose($fp);
}


$tfini = microtime(true);
$time = $tfini - $tini;

echo "Se hizo en $time segundos\n";
echo "<hr/>";


$tini = microtime(true);

for($i=1;$i<=1000;$i++)
{
    $fp=fopen('users.txt', 'w');
    fwrite($fp, 'sss');   
}


$tfini = microtime(true);
$time = $tfini - $tini;

echo "Se hizo en $time segundos\n";
echo "<hr/>";

$tini = microtime(true);

for($i=1;$i<=1000;$i++)
{
    file_put_contents('users.txt', 'sss');    
}


$tfini = microtime(true);
$time = $tfini - $tini;

echo "Se hizo en $time segundos\n";
echo "<hr/>";
