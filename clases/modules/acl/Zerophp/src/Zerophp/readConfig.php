<?php

function readConfig($config)
{
    $globalFile = ROOT_PATH.'/configs/global.php';
    $localFile = ROOT_PATH.'/configs/local.php';
    
    if(!file_exists($globalFile))
        die("No existe el archivo de configuracion");
    
    if(file_exists($localFile))
    {
        $globalFile = include $globalFile;
        $localFile = include $localFile;
        $config = array_merge($globalFile,$localFile);
        
        return $config;        
    }
    else
    {
        return include $globalFile;
    } 
}