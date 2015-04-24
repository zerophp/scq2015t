<?php
function setUser($data)
{
    
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    $users = [];
    // Conectarse al DBMS
//         $link = mysqli_connect($config['host'], 
//                         $config['user'],
//                         $config['password']
//                         );
    // Seleccinar la DB
//         mysqli_select_db($link, $config['database']);
    // Hacer la Consulta
        $query = "INSERT INTO user SET ";
        $array=[];
        foreach($_POST as $key => $value)
        {
            $array[]=$key."="."'".$value."'";
        }
        
        $string =  implode(",", $array);
        
        $query.=$string;
        echo $query;
        
        die;
        
    // Enviar la Consulta
        $result = mysqli_query($link, $query);
    // Recorrer el Recordset
       
    // Cerrar la conexion a la DB
    
        mysqli_close($link);
    return $result;
}