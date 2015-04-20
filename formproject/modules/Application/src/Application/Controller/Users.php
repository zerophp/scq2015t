<?php

switch ($request['action'])
{
    case 'index':
    case 'select':
        $users = file_get_contents('../data/users.txt');
        $users = explode("\n", $users);
        
        foreach ($users as $user)
            $array[]=explode(',',$user);
        
        ob_start();
            include (APPLICATION_PATH."/../views/users/select.phtml");
            $content = ob_get_contents();
        ob_end_clean();
          
    break;

    case 'insert':
        if($_POST)
        {
            file_put_contents('../data/users.txt', implode(',',$_POST)."\n", FILE_APPEND );
            header('Location: /users.php');
        }
        else 
        {
            include (APPLICATION_PATH."/../views/users/insert.phtml");
        }
    break;
    
    case 'update':

        if ($_POST)
        {
            // Leer el fichero users.txt en un string
            $users = file_get_contents('../data/users.txt');
            // Separar en un array por saltos de linea
            $users = explode("\n", $users);
            // Reemplzar el elemento id del array por el string del usuario
            $users[$_POST['id']]=implode(',',$_POST);
            // Juntar el array por saltos de linea
            $users = implode("\n", $users);
            // Escribir el fichero a users.txt
            file_put_contents('../data/users.txt', $users);
            // Saltar a select
            header ('Location: /users.php');
        }
        else
        {
            $users = file_get_contents('../data/users.txt');
            $users = explode("\n", $users);
            $user = explode(",",$users[$request['params']['id']]);
            
            $user = array('name'=>$user[1],
                          'password'=>$user[2],
                          'gender'=>$user[3]  
            );
            include (APPLICATION_PATH."/../views/users/update.phtml");
            
            
        }
    break;
    
    case 'delete':
   
        if($_POST)
        {
            if($_POST['borrar']=='si')
            {
                // Leer el fichero users.txt en un string
                $users = file_get_contents('../data/users.txt');
                // Separar en un array por saltos de linea
                $users = explode("\n", $users);
                // Eliminar el elemento id del array
                unset($users[$_POST['id']]);
                // Juntar el array por saltos de linea
                $users = implode("\n", $users);
                // Escribir el fichero a users.txt
                file_put_contents('../data/users.txt', $users);
            }
            // Saltar a select 
            header ('Location: /users.php');
            
        }
        else
        {
            include (APPLICATION_PATH."/../views/users/delete.phtml");
            
        }
        
    break;
        
}
 
// include (APPLICATION_PATH."/../views/layouts/jumbotron-narrow.phtml");
include (APPLICATION_PATH."/../views/layouts/dashboard.phtml");
