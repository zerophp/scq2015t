<?php
function getUsers()
{
    $filename = '../data/users.txt';
    $users = file_get_contents($filename);
    $users = explode("\n", $users);
    
    foreach ($users as $user)
        $array[]=explode(',',$user);
    
    return $array;
}
