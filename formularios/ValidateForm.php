<?php

function ValidateForm($formDefinition, $filteredData)
{
    $result =true;
    foreach ($filteredData as $key=>$value){
        $validators = $formDefinition[$key]['validators'];
        foreach ($validators as $validator_key=>$validator_value){
            $result = $result & Decisor($validator_key, $validator_value, $value);
        }
    }
    
    /* Code goes here*/
//     return true | $array;
    return  $result;
}

function Decisor($validator_key, $validator_value, $value){
    $result = true;
    switch ($validator_key){
        case 'lengthMax':
            $result = ValidateLengthMax($validator_value, $value);
            break;
        case 'lengthMin':
            $result = ValidateLengthMin($validator_value, $value);
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
