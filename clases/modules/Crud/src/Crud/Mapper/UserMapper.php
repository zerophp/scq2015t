<?php
namespace Crud\Mapper;

use acl\ZerophpCore\Config;


class UserMapper 
{
    protected $resource = 'User';
    private $config;
    
    private function getAdapter()
    {
        $this->config = Config::$config;
        return $this->config['adapter'];
    }
    
    public function getUsers()
    {
        
        $adapter = $this->getAdapter();         // Mysql | File
        
        $classname = $adapter.$this->resource;
        $classname = 'Crud\\Gateways\\'.$classname;
        $gateway = new $classname($this->config['database']);        
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