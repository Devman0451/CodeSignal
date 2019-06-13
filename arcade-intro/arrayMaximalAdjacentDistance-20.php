<?php

function arrayMaximalAdjacentDifference($inputArray) {
    $max = 0;
    for($i = 1; $i < sizeof($inputArray); $i++) {
        if ($max < abs($inputArray[$i] - $inputArray[$i-1])) {
            $max = abs($inputArray[$i] - $inputArray[$i-1]);
        }
    }
    
    return $max;
}