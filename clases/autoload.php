<?php

function autoload($classname)
{
    $data = explode("\\",$classname);
    $filename = __DIR__."\\Modules\\".$data[0]."\\src\\".$classname.".php";
    
    if(file_exists($filename))
        include $filename;
    else 
    {
        $constructor = $data[0];
        $package = $data[1];
        unset($data[0]);
        $class = implode("\\", $data);
        $vendorname = __DIR__."\\Vendor\\".$constructor."\\".$package."\\src\\".$class.".php";

        if (file_exists($vendorname))
            include $vendorname;        
    }
        
    return;   
}


function libraryAutoload($classname)
{
//     echo "<pre>autoload NOT FOUND: ";
//     print_r($classname);
//     echo "</pre>";
}



spl_autoload_register('autoload');
spl_autoload_register('libraryAutoload');


