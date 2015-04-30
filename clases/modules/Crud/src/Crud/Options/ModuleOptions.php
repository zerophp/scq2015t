<?php
namespace Crud\Options;

class ModuleOptions
{
    protected $emailAdmin = 'user@options.com';
    
    protected $param1 = 'valDefault';
    
    protected $param2 = 'valDefault2';
    
    
    
    
    
    /**
     * @return the $param1
     */
    public function getParam1()
    {
        return $this->param1;
    }

    /**
     * @return the $param2
     */
    public function getParam2()
    {
        return $this->param2;
    }

    /**
     * @param string $param1
     */
    public function setParam1($param1)
    {
        $this->param1 = $param1;
    }

    /**
     * @param string $param2
     */
    public function setParam2($param2)
    {
        $this->param2 = $param2;
    }

    /**
     * @return the $emailAdmin
     */
    public function getEmailAdmin()
    {
        return $this->emailAdmin;
    }

    /**
     * @param string $emailAdmin
     */
    public function setEmailAdmin($emailAdmin)
    {
        $this->emailAdmin = $emailAdmin;
        return $this;
    }
    
    
        
    

    
}