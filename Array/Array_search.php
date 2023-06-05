<?php

//  Procura por um valor em um array
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array);

print_r($key); //2;
