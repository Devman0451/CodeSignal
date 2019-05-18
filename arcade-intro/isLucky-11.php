<?php

function isLucky($n) {
    $arr = $n . "";
    $s1 = 0;
    $s2 = 0;
    $idx = strlen($arr)/2 - 1;
    for ($i = 0; $i <= $idx; $i++) {
        $s1 += $arr[$i];
    }
    for ($i = $idx + 1; $i <= strlen($arr); $i++) {
        $s2 += $arr[$i];
    }
    return $s1 == $s2;
}
