<?php

$array = array(1, 2, 3, 4, 5);

foreach ($array as $i => $value) {
    unset($array[$i]);
}
$array[] = 6;

// Reindexando:
$array = array_values($array);
$array[] = 7;
print_r($array);
