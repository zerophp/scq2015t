<?php 

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


include ("../vendor/zerophp/core/parseUrl.php");
$request = parseUrl($_SERVER['REQUEST_URI']);

echo "<pre>";
print_r($request);
echo "</pre>";


die;
if(isset($_GET['controller']))
    $controller = $_GET['controller'];
else
    $controller = 'users';


switch($controller)
{
    case 'users':
        include ("../modules/Application/src/Application/Controller/users.php");
    break;
    
    case 'projects':
        include ("../modules/Application/src/Application/Controller/projects.php");
    break;
}


