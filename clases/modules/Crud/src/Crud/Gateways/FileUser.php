<?php
namespace Crud\Gateway;

class FileUser
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