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
    
    // Explode de $URL
    // Verifica que el controller existe
    // Verificar si la action existe
    
    
    return $request;
}