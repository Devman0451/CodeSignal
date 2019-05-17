<?php

function commonCharacterCount($s1, $s2) {
    $c = 0;
    $arr1 = str_split($s1);
    $arr2 = str_split($s2);
    foreach($arr1 as $letter) {
        $idx = array_search($letter, $arr2);
        if ($idx !== false) {
            $c++;
            $arr2[$idx] = '/';
        }
    }
    return $c;
}