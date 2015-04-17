<?php

echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

echo "<pre>Get: ";
print_r($_GET);
echo "</pre>";

if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'select';

switch ($action)
{
    case 'select':
         // leer en un string los datos de users.txt
        $users = file_get_contents('../data/users.txt');
        
        // separar por saltos de linea el string en un array
        $users = explode("\n", $users);
        
        // separar por comas cada linea del array
        foreach ($users as $user)
        {
            $array[]=explode(',',$user);
        }
        
        // Dibujar la tabla
        echo "<a href=\"/users.php?action=insert\">Insert</a>";
        if(is_array($array)){
            echo "<table border =1 ><tbody>";
   
            foreach($array as $id => $value)
            {
                echo "<tr>";
                
                if(is_array($value)){
    
                    foreach($value as $value2)
                    {
                        echo "<td>$value2</td>";
                    }
                }
                else{
                    echo "<td>$value</td>";
                }
                // agregar una columna mas con update y delete
                echo "<td>";
                echo "<a href=\"/users.php?action=update&id=".$id."\">Update</a> | ";
                echo "<a href=\"/users.php?action=delete&id=".$id."\">Delete</a>";
                echo "</td>";
                
                echo "</tr>";
            }
            echo "<tbody></table>";
        }            
    break;

    case 'insert':

        if($_POST)
        {
            echo "esto es procear";
            file_put_contents('../data/users.txt', implode(',',$_POST)."\n", FILE_APPEND );
            header('Location: /users.php');
        }
        else 
        {
            echo "formulario vacio";
            $userForm = include('../modules/Application/src/Application/Forms/UserForm.php');
            include ('../modules/Application/src/Application/View/Helper/RenderForm.php');
            
            $html = RenderForm ($userForm, '/users.php?action=insert', 'POST');
            echo $html;
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
            $user = explode(",",$users[$_GET['id']]);
            
            $user = array('name'=>$user[1],
                          'password'=>$user[2],
                          'gender'=>$user[3]  
            );
            $user['id']=$_GET['id'];
            
            $userForm = include('../Forms/UserForm.php');
            include ('../View/Helper/RenderForm.php');
            
            $html = RenderForm ($userForm, 
                                '/users.php?action=update', 
                                'POST',
                                $user);
            echo $html;
            
            
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
            include ("../../views/users/delete.php");
            
        }
        
    break;
        
}
