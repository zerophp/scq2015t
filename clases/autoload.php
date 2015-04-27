<?php



function autoload($classname)
{
//     echo "<pre>autoload: ";
//     print_r($classname);
//     echo "</pre>";
    $data = explode("\\",$classname);
    
//     echo "<pre>autoload: ";
//     print_r($data);
//     echo "</pre>";
    
//     die;
    $filename = __DIR__."\\Modules\\".$data[0]."\\src\\".$classname.".php";
   
   
    
    if(file_exists($filename))
        include $filename;
    else 
    {
        $vendorname = __DIR__."\\Vendor\\".$data[0]."\\".$data[1]."\\src\\".$data[1]."\\".$data[2].".php";
//         echo $vendorname;
        if (file_exists($vendorname))
            include $vendorname;
        
    }
        
    return;
   
    
}


function libraryAutoload()
{
    echo "library";
}



spl_autoload_register('autoload');
spl_autoload_register('libraryAutoload');


