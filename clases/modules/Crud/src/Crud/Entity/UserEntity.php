<?php
namespace Crud\Entity;

class UserEntity
{
    public $iduser;
    public $name;
    protected $email;  
    private $password;  
    
    /**
     * @return the $password
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