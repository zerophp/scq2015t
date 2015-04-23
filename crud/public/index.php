<?php 

define ("ROOT_PATH", __DIR__.'/..');
define ("APPLICATION_PATH", __DIR__.'/../modules/Application/src/Application');
define ("VENDOR_PATH", __DIR__.'/../vendor');


include (VENDOR_PATH."/acl/Zerophp/src/Zerophp/readConfig.php");
include (VENDOR_PATH."/acl/Zerophp/src/Zerophp/parseUrl.php");



$config = readConfig(ROOT_PATH.'/configs/application.config.php');

// echo "<pre>";
// print_r($config);
// echo "</pre>";

$request = parseUrl($_SERVER['REQUEST_URI']);


switch($request['controller'])
{

    case 'users':
        include (APPLICATION_PATH."/Controller/Users.php");
    break;
    
    case 'index':
    case 'home':
        include (APPLICATION_PATH."/Controller/Home.php");
    break;
    
    case 'error':
        
    break;
    
}


