<?php
namespace Crud\Mapper;

class UserMapper 
{
    protected $resource;
    
    public function getUsers()
    {
        
        $adapter = $this->getAdapter();         // Mysql | File
        
        $classname = $adapter.$resource;
//         $gateway = new MysqlUser();
        $gateway = new $classname();
        $users = $gateway->getUsers();
        
        return $users;
    }
    
    public function getUser()
    
    public function setUser()
    
    public function patchUser()
    
    public function putUser()
    
    public function deleteUser()
    
    
    
    
}