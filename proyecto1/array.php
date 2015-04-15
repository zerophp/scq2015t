<?php


$user = array();

define ('casa',1);
$user = array('nombre' => "agustin",
              'apellidos' => "calderon",
              'edad' => 12,
              1 => 'ahora',
              'a2'=> 'esto',
              9=>'mas',
              3=>false,
              'asd'=>'askjs',
              'jajajaja',
              1.4=>5,6,
              'que llave tengo',
                true => 'ya no mas',
               's' => 9
              
);

echo "<pre>";
print_r($user);
echo "</pre>";




foreach ($user as $key => $value)
{
    echo $key.": ".$value;
    echo "<br/>";
}

foreach ($user as $value)
{
    echo $value;
    echo "<br/>";
}












