<?php
namespace Application;

class Module
{
    protected $options;
    static $instance;
    
    static public function getInstance($options=null)
    {
        if(!isset(self::$instance))
            self::$instance = new Module($options);
    
        return self::$instance;
    }

    private function __construct($options)
    {        
        $this->options = $options;
    } 

    /**
     * @return the $options
     */
    public function getOptions()
    {
        return $this->options;
    }
}