<?php

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}
spl_autoload_register('autoload');


function __autoload($classname)
{
    echo "<pre>autoload: ";
    print_r($classname);
    echo "</pre>";
    $data = explode("\\",$classname);
    
    echo "<pre>autoload: ";
    print_r($data);
    echo "</pre>";
    
//     echo  __DIR__."\\Modules\\Application\\src\\".$classname.".php";
    die;
    $filename = __DIR__."\\Modules\\".$data[0]."\\src\\".$classname.".php";
    $vendorame = __DIR__."\\Vendor\\".$data[0]."\\src\\".$classname.".php";
    if(file_exists($filename))
        include $filename;
    else
        include $vendorame;
        
    
}