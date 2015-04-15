<?php

return array(
    'companyName' => array(
        'type'=>'text',
        'isEnable'=>true,
        'isReadOnly'=>false,
        'label'=>"Compañia",
        'placeHolder'=>"Compañia",
        'filters'=> array ('Escape', 'StringTrim', 'StripTags'),
        'validators' => array(
            'lenghtMax'=>100,
            'lenghtMin'=>1,
            'required'=>true,            
        )    
    ),
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
    'geoLocation' => array(
        'type'=>'text',
        'isEnable'=>true,
        'isReadOnly'=>false,
        'label'=> "Geo Localización (l, L)",
        'placeHolder'=>"latitud, Longitud",
        'filters'=> array ('Escape', 'StringTrim', 'StripTags'),
        'validators' => array(
            'required'=>true,            
        )
    ),
    'fuelType' => array(
        'type'=>'radio',
        'label'=>"Tipo de combustible",
        'options'=> array (
            'Gasoleo A'=>1.160,
            'Gasoleo Plus'=>1.236,
            'Sin plomo 95'=>1.269,
            'Sin plomo 98'=>1.394
        ),
        'default_option'=>'Sin plomo 95',
        'validators' => array(
            'required'=>true,
            'inArray'=>true,
        ),
    ),
    'fuelType' => array(
        'type'=>'radio',
        'label'=>"Surtidor",
        'options'=> array (
            '1'=>1,
            '2'=>2,
            '3'=>3,
            '4'=>4
        ),
        'validators' => array(
            'required'=>true,
            'inArray'=>true,
        ),
    ),
    'fulloption' => array(
        'type'=>'checkbox',
        'label'=>"Depósito lleno",
        'options'=> array (
            'Depósito lleno'=>99,
            '20€'=>20,
            '30€'=>30,
            '40€'=>40,
            '50€'=>50,
            '60€'=>60,
            '70€'=>70,
            '80€'=>80,
        ),
        'validators' => array(
            'required'=>true,
            'inArray'=>true,
        ),
    ),
    'amount' => array(
        'type'=>'text',
        'label'=>"Importe",
        'filters'=> array ('Escape', 'StringTrim', 'StripTags'),
        'validators' => array(
            'required'=>true,
            'inArray'=>true,
            'type'=>'numeric(2,3)'            
        ),
    ),
    'quantity' => array(
        'type'=>'text',
        'label'=>"Litros",
        'filters'=> array ('Escape', 'StringTrim', 'StripTags'),
        'validators' => array(
            'required'=>true,
            'inArray'=>true,
            'type'=>'numeric(3,2)'
        ),
    ),
    'submit' => array(
        'type'=>'submit',
        'label'=>"Repostar",        
    ),
    
    
);



$data = array ('stationName'=>
                    array(
                            'value'=>'Urgel',
                            'error'=>array('Muy largo', 'No es un email') 
                    )   
);




 




