<?php

/**
 * Get request from url
 *
 * @param string $url
 * @return array
 *
 * $array = array('controller','action','params'=>array())
 */
function parseUrl($url) 
{
    /**
    /README.md                  -> README.md
    /                           -> controller=default, action=default
    /kaka                       -> 404
    /users                      -> controller=users, action = default
    /users/insert               -> controller=users, action = insert
    /users/update/id/8          -> controller=users, action = update, params = array(id=>8)
    /users/kaka                 -> 404
    /users/update/id            -> 400
    /users/update/id/8/param    -> 400
    /users/update/kaka/kaka     -> controller=users, action = update, params = array(kaka=>kaka)
    */
    
    
    $controllerPath = $_SERVER['DOCUMENT_ROOT'].'/../modules/Application/src/Application/Controller/';
    // Explode $URL
    $arrayEntrada = explode("/", $url);
    $largoArrayEntrada = count($arrayEntrada);
    
    echo "<pre>";
    print_r($arrayEntrada);
    echo "</pre>";

    
            // Verify exists controller file
            if (file_exists($controllerPath.$arrayEntrada[1].'.php'))
            {
                //Save the controller name
                $arraySalida[0] = $arrayEntrada[1];

                // If exists action name save it, else default
                if (isset($arrayEntrada[2]))
                {
                    // Verificar si la action existe
                    //pendiente de localizar función que busque en un array.    
                    $acciones = array('insert','edit','delete','select');
      
//                     if (!array_search($arrayEntrada[2], $acciones))
                    if(!in_array($arrayEntrada[2], $acciones))
                    //if (!array_search($arrayEntrada[2], $acciones))
                    {
                        //header("HTTP/1.0 404 Not Found");
                        $arraySalida = array('controller'=>'error', 'action'=>'404');
                        //break;
                    }

                    $arraySalida[1] = $arrayEntrada[2];
                
                    //if the number of elements is even and greater than 2, 
                    //then save the params in an array.
                    if ($largoArrayEntrada > 3 && ($largoArrayEntrada % 2) != 0)
                    {
                        $params = array();
                        for ($i = 3; $i <= $largoArrayEntrada-2; $i=$i+2) 
                        {   
                            $params[$arrayEntrada[$i]] = $arrayEntrada[$i+1];
                        }
                        $arraySalida[2] = $params;
                    }
                    else if($largoArrayEntrada > 3){
                        $arraySalida = array('controller'=>'error', 'action'=>'400');
                    }
                }                    
//                 else if() {
//                     $arraySalida = array('controller'=>'error', 'action'=>'400s');
//                 }
            } 
            else if($arrayEntrada[1]!='')
            {
                $arraySalida = array('controller'=>'error', 'action'=>'404s');
            }
            else
            {
                $arraySalida = array('controller'=>'default', 'action'=>'default');
            }
    
 
    return $arraySalida;
}