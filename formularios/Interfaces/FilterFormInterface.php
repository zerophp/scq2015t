<?php

/**
 * Filter form by definition
 * available filter: Escape, StringTrim, StripTags
 * 
 * @param array $formDefinition
 * @param array $data
 * @return array
 */
function filterForm($formDefinition,$data)
{
    return $filter_data;
}



/**
* Filters dangerous substrings
* @param string $value
* @return the filter value
*/
function filterEscape($value){}



/**
 * Removes blank spaces before and after the value
 * @param string $value
 * @return the filter value
 */
function filterStringTrim($value){}



/**
 * Removes html tags
 * @param string $value
 * @return the filter value
 */
function  filterStringTags($value){}
