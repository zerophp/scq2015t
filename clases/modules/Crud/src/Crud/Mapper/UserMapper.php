<?php
namespace Crud\Mapper;

use acl\ZerophpCore\Config;


class UserMapper 
{
    protected $resource = 'User';
    
    private function getAdapter()
    {
        $config = Config::$config;
        return $config['adapter'];
    }
    
    public function getUsers()
    {
        
        $adapter = $this->getAdapter();         // Mysql | File
        
        $classname = $adapter.$this->resource;
        $classname = 'Crud\\Gateway\\'.$classname;
  
        $gateway = new $classname();
        
        
        die;
//         $gateway = new MysqlUser();
        
        $users = $gateway->getUsers();
        
        return $users;
    }
    
    public function getUser()
    {
        
    }   
     
    public function setUser()
    {
        
    }
    
    public function patchUser()
    {
        
    }
    
    public function putUser()
    {
        
    }
    
    public function deleteUser()
    {
        
    }
    
    
    
    
}