<?php
namespace acl\Zerophp;

class Dispatch
{
    static function dispatch($request)
    {
        switch($request['controller'])
        {
        
            case 'users':
                include (APPLICATION_PATH."/Controller/Users.php");
                break;
        
            case 'index':
            case 'home':
                include (APPLICATION_PATH."/Controller/Home.php");
                break;
        
            case 'crud':
                include (CRUD_PATH."/Controller/Crud.php");
                break;
        
            case 'error':
                echo "<pre>";
                print_r($request);
                echo "</pre>";
                die("error");
                break;
        
        }
    }
}