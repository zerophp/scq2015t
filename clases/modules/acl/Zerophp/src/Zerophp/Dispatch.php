<?php
namespace acl\Zerophp;


class Dispatch
{
    static function dispatch($request)
    {        
//         $controller = new Application\Controller\User();
        
        $className = $request['module']."\\Controller\\".$request['controller'];

        $controller = new $className();
        $content  = $controller->$request['action']();
        
        return array('layout'=>$controller->layout, 
                     'content'=> $content
                    );
       
    }
}