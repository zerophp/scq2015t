<?php
namespace Crud\Gateways;

use Crud\Adapter\MysqlAdapter;

class MysqlUser extends MysqlAdapter
{
    public function getUsers()
    {
        $sql = "SELECT * FROM user";
        $result = $this->query($sql);
        $array = $this->recordset($result);
        
        return $array;
    }
}