<?php

include ('RenderForm.php');
include ('FilterForm.php');
include ('ValidateForm.php');



$refuelForm = include('refuelForm');
$html = RenderForm ($refuelForm);
echo $html;


