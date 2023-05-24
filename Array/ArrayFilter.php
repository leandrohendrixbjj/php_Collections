<?php

// Filtra elementos de um array utilizando uma função callback
$arr = [6, 7, 8, 9, 10, 11, 12];

function par($var)
{
    return !($var & 1);
}

echo "<pre>";
print_r(array_filter($arr, "par"));
echo "</pre>";
