<?php

function almostIncreasingSequence($sequence) {
    $miss = 0;
    for($i = 1; $i < count($sequence); $i++) {
      if($sequence[$i] <= $sequence[$i - 1]) {
        $miss++;
      }
      if($miss > 1) {
        return false;
      }
      if( $sequence[$i] <= $sequence[$i-2] && $i+1 < count($sequence) &&$sequence[$i+1] <= $sequence[$i-1]) {
        return false;
      }
    }
    return true;
  }