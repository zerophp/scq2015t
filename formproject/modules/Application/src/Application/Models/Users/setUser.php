<?php
function setUser($data)
{
    file_put_contents('../data/users.txt', implode(',',$_POST)."\n", FILE_APPEND );
    return $data;
}