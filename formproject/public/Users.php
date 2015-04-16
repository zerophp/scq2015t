<?php

if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'select';

switch ($action)
{
    case 'select':
        echo "exto es select";
        

        $userForm = include('UserForm.php');
        include ('RenderForm.php');
        
        $html = RenderForm ($userForm, '/users.php?action=insert', 'POST');
        echo $html;
        
        
        // Select
        // Leer datos
        // leer en un string los datos de users.txt
        // separar por saltos de linea el string en un array
        // separar por comas cada linea del array
        
        
        // Dibujar la tabla
        // dibujar enlace a insert
        // dibujar table
        // para cada linea del array dibujar los TR
        // para cada columna de la linea del array dibujar td
        // poner contenido en el td
        // agregar una columna mas con update y delete
    break;

    case 'insert':
        echo "exto es insert";
        if($_POST)
        {
            echo "esto es procear";
        }
        else 
        {
            echo "formulario vacio";
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
        echo "exto es delete";
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




        
    


    

    
    
    
    