<?php
function deleteUser()
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
    
    return true;
}