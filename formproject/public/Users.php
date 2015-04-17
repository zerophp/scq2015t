<?php

if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'select';

switch ($action)
{
    case 'select':
        echo "esto es select";
        

        
        
        // leer en un string los datos de users.txt
        $users = file_get_contents('users.txt');
        
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

        // dibujar enlace a insert
        // dibujar table
        // para cada linea del array dibujar los TR
        // para cada columna de la linea del array dibujar td
        // poner contenido en el td
       
    break;

    case 'insert':
        echo "exto es insert";
        if($_POST)
        {
            echo "esto es procear";
            file_put_contents('users.txt', implode(',',$_POST)."\n", FILE_APPEND );
            header('Location: /users.php');
        }
        else 
        {
            echo "formulario vacio";
            $userForm = include('UserForm.php');
            include ('RenderForm.php');
            
            $html = RenderForm ($userForm, '/users.php?action=insert', 'POST');
            echo $html;
        }
        // Create
        // if POST
            // filtrar
            // validar
            // Si validar OK
            // Procesar
        // else
            // recoger los datos del usuario
            // Mostrar el formulario con los datos
        
        // else
        // Mostrar el formulario vacio
    break;
    
    case 'update':
        echo "exto es update";
        // Update
        // if POST
        // filtrar
        // validar
        // Si validar OK
        // Procesar
        // else
        // recoger los datos del usuario
        // Mostrar el formulario con los datos
        
        // else
        // coger los datos del usuario
        // Mostrar el formulario con datos del usuario
    break;
    
    case 'delete':
   
        if($_POST)
        {
            echo "borrar";
            // Leer el fichero de usuarios en un string
            // 
            
           
            
            die ("aqui termina");
        }
        else
        {
            include ("deleteform.php");
            
        }
        // Delete
        // if POST
        // filtrar
        // validar
        // si validar ok
        // Procesar
        
        
        // Saltar a Select
        // else
        // coger los datos del usuario
        // Mostrar el formulario de delete
        
    break;
    
        
}




        
    


    

    
    
    
    