<?php
namespace Crud\Gateway;

class MysqlUser
{
    public function getUsers()
    {
        
        
        $db = new MysqlAdapter($config['database']);
        $sql = "SELECT * FROM user";
        $result = $db->query($sql);
        $array = $db->recordset($result);
        
        return $array;
    }
}