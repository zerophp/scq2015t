<?php
function patchUser($id,$data)
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
    
    
    return true;
}