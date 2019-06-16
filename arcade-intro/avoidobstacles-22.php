<?php

function avoidObstacles($inputArray) {
    $jump = 2;
    while(true) {
        $a = array_filter($inputArray, function($e) use ($jump) { 
            return $e % $jump === 0 ? TRUE : FALSE; 
        });
        if(sizeof($a) == 0) {
            return $jump;
        }
        $jump++;
    }
}