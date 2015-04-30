<?php
namespace Crud\Controller;

use acl\ZerophpCore\View;
use Crud\Mapper\UserMapper;
use acl\ZerophpCore\Interfaces\OptionAwareInterface;

class Crud implements OptionAwareInterface
{    
    public $layout = 'dashboard';
    protected $options;
    
    public function indexAction()
    {
        //header("Location: /crud/select");
    }
    
    public function selectAction()
    {
//         echo "select";
        $mapper = new UserMapper();
        $array = $mapper->getUsers();

        $content = View::renderView(__DIR__."/../../views/users/select.phtml",
            array('users'=>$array));
        
//         echo $this->getOptions()->getEmailAdmin();
        
        return $content;
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
    
    /**
     * @return the $options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param field_type $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

   
    
    
    
}


