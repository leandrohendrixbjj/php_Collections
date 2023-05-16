<?php
// Divide um array em Pedaços

$input_array = array('a', 'b', 'c', 'd', 'e');
$pedaco = 2;
$indexNaSequencia = true;

print_r(
    array_chunk($input_array, $pedaco, $indexNaSequencia)
);
