<?php

include ('FilterForm.php');
include ('ValidateForm.php');
include ('DibujaTabla.php');

$userForm = include('UserForm.php');


echo "<pre>post: ";
print_r($_POST);
echo "</pre>";


file_put_contents('users.txt', implode(',',$_POST)."\n", FILE_APPEND );


$data = explode("\n",file_get_contents('users.txt'));
foreach ($data as $key => $value)
{
    $table[]=explode(",", $value);
}

DibujaTabla($table);
// $filterData = @FilterForm($userForm, $_POST);

// $valid = ValidateForm($userForm, $filterData);

// echo "<pre>filter: ";
// print_r($filterData);
// echo "</pre>";

// echo "<pre>valid: ";
// print_r($valid);
// echo "</pre>";