<?php

function ValidateForm($formDefinition, $filteredData)
{
    $result =true;
    foreach ($filteredData as $key=>$value)
    {
        $validators = $formDefinition[$key]['validators'];
        foreach ($validators as $validator_key=>$validator_value)
        {
            $kaka = Decisor($validator_key, $validator_value, $value);
            echo "<pre>";
            print_r($kaka);
            echo "</pre>";
//             $result = $result & 
        }
    }
    
    /* Code goes here*/
//     return true | $array;

    return  $result;
}

function Decisor($validator_key, $validator_value, $value)
{
    $result = array();
//     $result = true;
    switch ($validator_key){
        case 'lengthMax':
            $result[] = ValidateLengthMax($validator_value, $value);
            break;
        case 'lengthMin':
            $result[] = ValidateLengthMin($validator_value, $value);
            break;
        default:
            
            break;
    }
    
    return $result;
}

function ValidateLengthMax($validator_value, $value){
    $result = true;
    
    $result = $value<=$validator_value;
    
    return $result;
}

function ValidateLengthMin($validator_value, $value){
    $result = true;
    
    $result = $value>=$validator_value;
    
    return $result;
}
