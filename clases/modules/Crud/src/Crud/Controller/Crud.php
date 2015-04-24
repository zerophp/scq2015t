<?php


switch ($request['action'])
{
    case 'index':
    case 'select':
        
//         $array = getUsers($config['database']);     
        $resource = 'user';
        $adater = ' Mysql';
        
        
        
        
        
        
        $content = renderView(CRUD_PATH."/../views/users/select.phtml",
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
            $content = renderView(CRUD_PATH."/../views/users/insert.phtml");
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
            $content = renderView(CRUD_PATH."/../views/users/update.phtml",
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
            $content = renderView(CRUD_PATH."/../views/users/delete.phtml",
                array('user'=>$user)); 
        }        
    break;        
}
 
include (APPLICATION_PATH."/../views/layouts/dashboard.phtml");
