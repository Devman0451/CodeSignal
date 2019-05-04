<?php

function adjacentElementsProduct($inputArray) {
    $a = [];
    for($i = 0; $i < count($inputArray) - 1; $i++) {
        $a[] = $inputArray[$i] * $inputArray[$i + 1];
    }
    return max($a);
}