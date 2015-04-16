<?php

include ('RenderForm.php');
include ('FilterForm.php');
include ('ValidateForm.php');


$refuelForm = include('refuelForm.php');
$userForm = include('UserForm.php');

$html = RenderForm ($userForm, 'procesar.php', 'POST');
echo $html;
