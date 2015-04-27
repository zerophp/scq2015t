<?php
namespace Crud\Controller;

use acl\Zerophp\View;

class Crud
{    
    public $layout = 'dashboard';
    
    public function selectAction()
    {
//                 $array = getUsers($config['database']);

        $array = array (1,2,3);
        $resource = 'user';
        $adater = ' Mysql';

        $content = View::renderView(__DIR__."/../../views/users/select.phtml",
            array('users'=>$array));
        
        return $content;
//         include (APPLICATION_PATH."/../views/layouts/dashboard.phtml");
    }
    
    public function insertAction()
    {
        if($_POST)
        {
            setUser($_POST);
            header('Location: /users.php');
        }
        else
        {
            $userForm = include('../modules/Application/src/Application/Forms/UserForm.php');
            
            $content = View::renderView(__DIR__."/../../views/users/insert.phtml",
                                            array('form'=>$userForm)
                                        );
        }
        return $content;
    }
    
    public function updateAction()
    {
        if ($_POST)
        {
            patchUser($id, $data);
            header ('Location: /users.php');
        }
        else
        {
            $user = getUser($id);
            $content = View::renderView(__DIR__."/../../views/users/update.phtml",
                array('user'=>$user));
        }
        return $content;
    }
    
    public function deleteAction()
    {
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
            $content = View::renderView(__DIR__."/../../views/users/delete.phtml",
                array('user'=>$user));
        }
        return $content;
    }
    
}


