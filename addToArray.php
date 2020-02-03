<?php

$array = ['peer', 'apple', 'frikandel'];

print_r(addItemToArray($array, 'mandarijn'));

function addItemToArray($array, $value):array {
     $array[] = $value;
     return $array;
}

