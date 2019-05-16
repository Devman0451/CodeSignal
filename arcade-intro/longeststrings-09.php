<?php

function allLongestStrings($inputArray) {
    $max = 0;
    $arr = [];
    foreach($inputArray as $string) {
        if (strlen($string) > $max) $max = strlen($string); 
    }
    foreach($inputArray as $string) {
        if (strlen($string) == $max) $arr[] = $string; 
    }
    return $arr;
}