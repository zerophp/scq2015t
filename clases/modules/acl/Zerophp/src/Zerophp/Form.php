<?php
namespace acl\Zerophp;


class Form
{
    /**
    * Renders a form.
    *
    * @param array $formDefinition
    * @param string $action
    * @param string $method
    * @param array $data
    * @return string
    */
    
    static public function RenderForm($formDefinition, $action, $method, $data = null)
    {
        $output= "<html>\n";
        $output= $output."<body>\n";
        $output= $output.'<form action="'.$action.'" method="'.$method.'">'."\n";
        foreach($formDefinition as $key=>$value)
        {
            switch ($value['type'])
            {
                case "hidden":
                    $output=$output. '<input type="'
                        .$value['type']
                        .'" name="'
                            .$key
                            .'" value="'
                                .$data[$key]
                                .'"><br/>'."\n";
                                break;
                case "text":
                    $output= $output.$value['label']
                                    .':<input type="'
                                    .$value['type']
                                    .'" name="'
                                    .$key
                                    .'" value="'
                                    .$data[$key]
                                    .'"><br/>'."\n";
                    break;
                case "password":
                    $output= $output.$value['label']
                                    .':<input type="'
                                    .$value['type']
                                    .'" name="'
                                    .$key
                                    .'" size='
                                    .$value['validators']['lenghtMax']
                                    .'><br/>'."\n";
                    break;            
                case "radio":
                    foreach($value['options'] as $option=>$valueOption)
                    {
                        $output= $output.$value['label']
                                        .':<input type="'
                                        .$value['type']
                                        .'" name="'
                                        .$key
                                        .'" value="'.$valueOption.'" ';
                        if (isset($value['default_option'])) {
                            if ($option==$value['default_option'])
                            {
                                $output= $output.'checked';
                            }
                        }
                        $output= $output.'>'
                                        .$option
                                        .'<br/>'."\n";
                    }
    
    
                    break;            
                case "submit":
                    $output= $output.'<input name="submit" type="'
                                    .$value['type']
                                    .'" value="'
                                    .$value['label']
                                    .'"'
                                    .'><br/>'."\n";
                    break;            
            }
        }
    
         $output= $output."</form>\n";
         $output= $output."</body>\n";
         $output= $output."</html>";
    
        return $output;
    }   
}
