<?php

/**
 * Write a 2 dimension table as lines.
 * @param array $tabla Array de 2 dimensións.
 */
function DibujaTabla($array)
{
    $result = '';
    if(is_array($array)){
        echo "<table border =1 ><tbody>";
//         for($i=0;$i<count($array);$i++)
        foreach($array as $key => $value)
        {
            echo "<tr>";
            
            if(is_array($value)){
//                 for($j=0;$j<count($array[$i]);$j++)
                foreach($value as $key2 => $value2)
                {
//                     $val = $array[$i][$j];
                    echo "<td>$value2</td>";
                }
            }
            else{
//                 $val = $array[$i];
                echo "<td>$value</td>";
            }
            
            echo "</tr>";
        }
        echo "<tbody></table>";
    }
    
    echo $result;
}