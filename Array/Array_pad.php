<?php
// Expante o tamanho do array
$input = array(1, 2);
$newLenght = 5;
$default = 0;

$result = array_pad($input, $newLenght, $default); //(1, 2, 0, 0, 0)

print_r($result);
