<?php

function boxBlur($image) {
    $final = [];
    for($row = 1; $row < sizeof($image) - 1; $row++) {
        $rrow = [];
        for($col = 1; $col < sizeof($image[0]) - 1; $col++) {
            $total = $image[$row - 1][$col - 1] + $image[$row - 1][$col] + $image[$row - 1][$col + 1]
                    +$image[$row][$col - 1] + $image[$row][$col] + $image[$row][$col + 1]
                    +$image[$row + 1][$col - 1] + $image[$row + 1][$col] + $image[$row + 1][$col + 1];
            $rrow[] = floor($total/9);
        }
        $final[] = $rrow;
    }
    return $final;
}
