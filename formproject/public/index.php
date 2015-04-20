<?php 

echo "<pre>";
print_r($_SERVER['REQUEST_URI']);
echo "</pre>";


define ("APPLICATION_PATH", __DIR__.'/../modules/Application/src/Application');
define ("VENDOR_PATH", __DIR__.'/../vendor');


include (VENDOR_PATH."/acl/Zerophp/src/Zerophp/parseUrl.php");
$request = parseUrl($_SERVER['REQUEST_URI']);

echo "<pre>request: ";
print_r($request);
echo "</pre>";




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


