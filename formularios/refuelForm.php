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
    'fuelPump' => array(
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
    'fullOption' => array(
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



$post = array ('companyName'=>'Repsol',
               'stationName'=>'Estación Urgell',
                'geoLocation'=>'41.38041, 2.16060',
                'fuelType'=>'Sin plomo 95',
                'fuelPump'=>'3',
                'amount'=>'15,25',
                'quantity'=>'10',
                'submit'=>'Repostar',
);


$error =array ('companyName'=>'Repsol',
               'stationName'=>'Estación Urgell',
                'geoLocation'=>'41.38041, 2.16060',
                'fuelType'=>'Sin plomo 95',
                'fuelPump'=>'3',
                'amount'=>'15,25',
                'quantity'=>'10',
                'submit'=>'Repostar',                
                'errors'=>array('companyName'=>'Muy largo, No es un email',
                                            'stationName'=>'Muy corto')
        
    );


$error = array ('companyName'=>array('value'=>'U',
                                     'error'=>'NOmbre muy corto'
                                ),
                'stationName'=>array('value'=>'Urgel',
                    'error'=>array('Muy largo', 'No es un email')
                ),
    
);





$data = array ('companyName'=>array('value'=>'Urgel'
),
    'stationName'=>array(
        'value'=>'Urgel',
        'error'=>array('Muy largo', 'No es un email')
    ),

);

 




