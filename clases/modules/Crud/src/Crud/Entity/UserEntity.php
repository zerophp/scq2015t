<?php
namespace Crud\Entity;

class UserEntity
{
    public $iduser;
    public $name;
    public $email;  
    private $password;  
    
    /**
     * @return the $password
     * filter: iha203
     * validate: int
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param field_type $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    
    
     
}