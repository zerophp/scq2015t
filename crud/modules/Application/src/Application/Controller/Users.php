<?php

include (APPLICATION_PATH.'/Models/Users/getUsers.php');
include (APPLICATION_PATH.'/Models/Users/getUser.php');
include (APPLICATION_PATH.'/Models/Users/setUser.php');
include (APPLICATION_PATH.'/Models/Users/patchUser.php');
include (APPLICATION_PATH.'/Models/Users/deleteUser.php');
include (VENDOR_PATH.'/acl/Zerophp/src/Zerophp/renderView.php');

switch ($request['action'])
{
    case 'index':
    case 'select':
        
        $array = getUsers();        
        $content = renderView(APPLICATION_PATH."/../views/users/select.phtml",
                              array('users'=>$array));  
    break;

    case 'insert':
        if($_POST)
        {
            setUser($_POST);
            header('Location: /users.php');
        }
        else 
        {
            $content = renderView(APPLICATION_PATH."/../views/users/insert.phtml");
        }
    break;
    
    case 'update':

        if ($_POST)
        {
            patchUser($id, $data);
            header ('Location: /users.php');
        }
        else
        {
            $user = getUser($id);            
            $content = renderView(APPLICATION_PATH."/../views/users/update.phtml",
                array('user'=>$user));  
        }
    break;
    
    case 'delete':   
        if($_POST)
        {
            if($_POST['borrar']=='si')
            {
                deleteUser($id);
            }
            header ('Location: /users.php');            
        }
        else
        {
            $user = getUser($id);           
            $content = renderView(APPLICATION_PATH."/../views/users/delete.phtml",
                array('user'=>$user)); 
        }        
    break;        
}
 
include (APPLICATION_PATH."/../views/layouts/dashboard.phtml");
