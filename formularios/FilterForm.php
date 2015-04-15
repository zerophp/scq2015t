<?php

/**
 * Filter form by definition
 * available filter: Escape, StringTrim, StripTags
 * 
 * @param array $formDefinition
 * @param array $data
 * @return array
 */
function filterForm($formDefinition, $data)
{
    foreach ($formDefinition as $id => $element) {
        if ($element['filters']) {
            foreach ($element['filters'] as $filter) {
                switch ($filter) {
                    case 'Escape':
                        $data[$id] = filterEscape($data[$id]);
                        break;
                    
                    case 'StringTrim':
                        $data[$id] = filterStringTrim($data[$id]);
                        break;
                    
                    case 'StripTags':
                        $data[$id] = filterStripTags($data[$id]);
                        break;
                }
            }
        }
    }
    
    return $data;
}

/**
 * Filters dangerous substrings
 *
 * @param string $value            
 * @return the filter value
 *        
 */
function filterEscape($value)
{
    // escapes every escape
    return str_replace('\\', '\\\\', $value);
}

function oscar_filterEscape($value)
{
    // escapes every escape
    $value = str_replace('\\', '\\\\', $value);
    // Escapes "
    $value = str_replace('"', '\"', $value);
    return $value;
}

/**
 * Removes blank spaces before and after the value
 *
 * @param string $value            
 * @return the filter value
 */
function filterStringTrim($value)
{
    return trim($value);
}

/**
 * Removes html tags
 *
 * @param string $value            
 * @return the filter value
 */
function filterStripTags($value)
{
    return strip_tags($value);
}
