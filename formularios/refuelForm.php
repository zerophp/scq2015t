<?php


$form = array(
    'stationName' => array(
        'type'=>'text',
        'isEnable'=>true,
        'isReadOnly'=>false,
        'label'=>"Nombre de la estacion",
        'placeHolder'=>"Estacion",
        'filters'=> array ('Escape', 'StringTrim', 'StripTags'),
        'validators' => array(
            'lenghtMax'=>100,
            'lenghtMin'=>1,
            'required'=>true,
            'equalTo'=>'fieldname',
            'inArray'=>true
        )    
    ),
    'fuelType' => array(
        'type'=>'radio',
        'label'=>"Tipo de combustible",
        //'placeHolder'=>"",
        'options'=> array (
                'Gasoleo A'=>1.160,
                'Gasoleo Plus'=>1.236,
                'Sin plomo 95'=>1.269,
                'Sin plomo 98'=>1.394
        ),
        'default_option'=>'Sin plomo 98',
        'filters'=> array ('Escape', 'StringTrim', 'StripTags'),
        'validators' => array(
                    'lenghtMax'=>100,
                    'lenghtMin'=>1,
                    'required'=>true,
                    'equalTo'=>'fieldname',
                    'inArray'=>true,                                     
         ),
    )
);



$data = array ('stationName'=>
                    array(
                            'value'=>'Urgel',
                            'error'=>array('Muy largo', 'No es un email') 
                    )   
);









