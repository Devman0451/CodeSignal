<?php

function matrixElementsSum($matrix) {
    $sum = 0;
    for($col = 0; $col < sizeof($matrix[0]); $col++) {
        for($row = 0; $row < sizeof($matrix); $row++) {
            if($matrix[$row][$col] == 0) break;
            $sum += $matrix[$row][$col];
        }
    }
    return $sum;
}