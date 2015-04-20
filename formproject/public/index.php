<?php 


define ("APPLICATION_PATH", __DIR__.'/../modules/Application/src/Application');
define ("VENDOR_PATH", __DIR__.'/../vendor');


include (VENDOR_PATH."/acl/Zerophp/src/Zerophp/parseUrl.php");
$request = parseUrl($_SERVER['REQUEST_URI']);


switch($request['controller'])
{

    case 'users':
        include (APPLICATION_PATH."/Controller/users.php");
    break;
    
    case 'projects':
        include (APPLICATION_PATH."/Controller/projects.php");
    break;
    
    case 'error':
        
    break;
    
}


