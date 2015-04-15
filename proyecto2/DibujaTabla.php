<?php

/**
 * Write a 2 dimension table as lines.
 * @param array $tabla Array de 2 dimensións.
 */
function DibujaTabla($array){
    $result = '';
    if(is_array($array)){
        echo "<table><tbody>";
        for($i=0;$i<count($array);$i++){
            echo "<tr>";
            
            if(is_array($array[$i])){
                for($j=0;$j<count($array[$i]);$j++){
                    $val = $array[$i][$j];
                    echo "<td>$val</td>";
                }
            }
            else{
                $val = $array[$i];
                echo "<td>$val</td>";
            }
            
            echo "</tr>";
        }
        echo "<tbody></table>";
    }
    
    echo $result;
}