<?php 

include "../autoload.php";
define ("ROOT_PATH", __DIR__.'/..');
define ("APPLICATION_PATH", __DIR__.'/../modules/Application/src/Application');


use acl\ZerophpCore\Router;
use acl\ZerophpCore\Config;
use acl\ZerophpCore\Dispatch;
use acl\ZerophpCore\View;
use acl\ZerophpCore\ModuleManager;

$routes = include (__DIR__.'/../configs/routes.config.php');

$config = Config::readConfig(__DIR__.'/../configs/application.config.php');
$request = Router::route($_SERVER['REQUEST_URI'], $routes);

ModuleManager::getInstance(__DIR__.'/../configs/application.config.php');

$response = Dispatch::dispatch($request);


echo View::renderLayout($response['layout'], $response['content']);;


