<?php

function Test8_1() 
{
    global $x;
    
    /* The Test */
    $t = microtime(true);
    while($i < 1000) {
        $tmp[] = '';
        ++$i;
    }

    return (microtime(true) - $t);
}


function Test8_2() 
{
    global $aHash;
    
    /* The Test */
    $t = microtime(true);
    while($i < 1000) {
        $tmp[] = "";
        ++$i;
    }

    return (microtime(true) - $t);
}



var_dump(Test8_1());
var_dump(Test8_2());
