<?php
function arrayReplace($inputArray, $elemToReplace, $substitutionElem) {
    return array_map(function($el) use($elemToReplace, $substitutionElem) { return $el == $elemToReplace ? $substitutionElem : $el;}, $inputArray);
}
