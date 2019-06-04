<?php

function palindromeRearranging($inputString) {
    $l = [];
    $miss = 0;
    for ($i = 0; $i < strlen($inputString); $i++) {
        if ($l[$inputString[$i]] == null) {
            $l[$inputString[$i]] = 1 ;
        } else {
            $l[$inputString[$i]]++;
        }
    }
    foreach ($l as $a) {
        if ($a % 2 != 0) $miss++;
    }
    return $miss < 2;
}
