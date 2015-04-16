<?php

include ('FilterForm.php');
include ('ValidateForm.php');

$userForm = include('UserForm.php');


echo "<pre>post: ";
print_r($_POST);
echo "</pre>";


$filterData = FilterForm($userForm, $_POST);

// $valid = ValidateForm($userForm, $filterData);

echo "<pre>filter: ";
print_r($filterData);
echo "</pre>";

// echo "<pre>valid: ";
// print_r($valid);
// echo "</pre>";