<?php 

use \Application\Controller\kakita;

include "../autoload.php";

$kaka = new kakita();



die;


define ("ROOT_PATH", __DIR__.'/..');
define ("APPLICATION_PATH", __DIR__.'/../modules/Application/src/Application');
define ("CRUD_PATH", __DIR__.'/../modules/Crud/src/Crud');
define ("VENDOR_PATH", __DIR__.'/../vendor');

$config = readConfig(ROOT_PATH.'/configs/application.config.php');

$router = readRouter(explode("/",$_SERVER['REQUEST_URI'])[1]);

// echo "<pre>";
// print_r($router);
// echo "</pre>";

$request = parseUrl($_SERVER['REQUEST_URI'], $router);

// echo "<pre>";
// print_r($config);
// echo "</pre>";

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


