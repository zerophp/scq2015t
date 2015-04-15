<?php

include ('RenderForm.php');
include ('FilterForm.php');
include ('ValidateForm.php');


/*
 * Opcion: Por definicion
 * Elementos del formulario y 
 * action y methods en la definicion.
 * 
 */
$refuelForm = include('refuelForm');
$html = RenderForm ($refuelForm);
echo $html;

/*
 * Opcion: Por constructor
 * Inyeccion de los elementos del formulario
 * en la definicion de la funcion.
 * Los elementos del formulario son requeridos.
 */
$refuelForm = include('refuelForm');
$html = RenderForm ($refuelForm, $action, $method);
echo $html;

/* 
 * Opcion: Por llamada a otra funcion
 * Inyeccion de elementos del formulario
 * en otra funcion.
 * Los elementos del formulario son opcionales.
 * 
 */
$refuelForm = include('refuelForm');
$formelements = formElements($refuelForm)
$html = RenderForm ($formelements, $action, $method);
echo $html;
