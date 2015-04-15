Es la hora 17 del día 15 del 4to mes de 2015.
<br/> 
El año no es bisiesto.
<br/> 
Es miercoles.
<br/>
<?php

$dia =array('Wednesday'=>'miercoles');
$ano = array ('no es bisiesto', 'es bisiesto');


echo date('\E\s \l\a \h\o\r\a G \d\e\l \d\í\a d \d\e\l n\t\o \m\e\s \d\e Y');
echo "<br/>";
echo date('\E\l \a\ñ\o ').$ano[date('L')];
echo "<br/>";
echo date("\\e\s ").$dia[date('l')];