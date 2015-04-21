<?php
function getUser($id)
{
    $users = file_get_contents('../data/users.txt');
    $users = explode("\n", $users);
    $user = explode(",",$users[$request['params']['id']]);
    
    $user = array('name'=>$user[1],
        'password'=>$user[2],
        'gender'=>$user[3]
    );
    return $user;
}