<?php

function makeArrayConsecutive2($statues) {
    sort($statues);
    return end($statues) - $statues[0] - sizeof($statues) + 1;
}
