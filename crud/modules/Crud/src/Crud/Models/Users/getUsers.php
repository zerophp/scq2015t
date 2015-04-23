<?php
function getUsers($config)
{
    $users = [];
    // Conectarse al DBMS
        $link = mysqli_connect($config['host'], 
                        $config['user'],
                        $config['password']
                        );
    // Seleccinar la DB
        mysqli_select_db($link, $config['database']);
    // Hacer la Consulta
        $query = "SELECT * FROM user";
    // Enviar la Consulta
        $result = mysqli_query($link, $query);
    // Recorrer el Recordset
        while ($row = mysqli_fetch_assoc($result))
        {
            $users[]=$row;
        }
    // Cerrar la conexion a la DB
    
        mysqli_close($link);
    return $users;
}
