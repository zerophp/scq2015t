<?php
namespace Crud\Mapper;

use acl\ZerophpCore\Config;
use acl\ZerophpCore\Hydrator;
use Crud\Entity\UserCollection;


class UserMapper 
{
    protected $resource = 'User';
    private $config;
    protected $entity = 'UserEntity';
    
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
        
        $entityName = 'Crud\\Entity\\'.$this->entity;
        $user = new $entityName();
        
        
//         echo "<pre>user to hydra: ";
//         print_r($users[0]);
//         echo "</pre>";
        
//         echo "<pre>entidad sin: ";
//         print_r($user);
//         echo "</pre>";
        
        
        $hydrator = new Hydrator();
        $user = $hydrator->hydrate($users[0], $user);

        
//         echo "<pre>entidad con: ";
//         print_r($user);
//         echo "</pre>";
        
        
        $arr = $hydrator->extract($user);
        
//         echo "<pre>extract con: ";
//         print_r($arr);
//         echo "</pre>";
        
        $collection = new UserCollection();
        $collec = $hydrator->hydrateC($users, $collection);
        
//         echo "<pre>collection con: ";
//         print_r($collec);
//         echo "</pre>";
        
//         die;
        
        return $collec;
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