<?php
namespace Crud\Adapter;

class FileAdapter
{
    public $link;
    protected $config;
    
    
    public function __construct($config)
    {
        $this->config = $config;
        
        $this->connect();
        $this->selectDb();
    }
    
    private function connect()
    {
        $this->link = mysqli_connect($this->config['host'],
            $this->config['user'],
            $this->config['password']
        );
        return;
    }
    
    private function selectDb()
    {
        mysqli_select_db($this->link, $this->config['database']);
    }
    
    public function query($sql)
    {
        $result = mysqli_query($this->link, $sql);
        return $result;
    }
    
    public function recordset($result)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            $recordset[]=$row;
        }
        
        return $recordset;
    }
    
    private function disconnect()
    {
        mysqli_close($this->link);
        return;
    }
    
    public function __destruct()
    {
        $this->disconnect();
    }
    
}