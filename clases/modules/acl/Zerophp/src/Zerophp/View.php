<?php
namespace acl\Zerophp;

class View
{
    static public function renderView($view, $viewData = null)
    {
    
        ob_start();
            include ($view);
            $content = ob_get_contents();
        ob_end_clean();
    
        return $content;
    } 
    
    static public function renderLayout($layout, $content)
    {
        ob_start();
            include (APPLICATION_PATH."/../views/layouts/".$layout.".phtml");
            $content = ob_get_contents();
        ob_end_clean();
        
        return $content;
    }
}

