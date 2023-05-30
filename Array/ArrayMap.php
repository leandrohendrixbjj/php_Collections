<?php

// Retorna um array contendo os resultados da aplicação do callback 
function  sum($value)
{
    return $value += 1;
}

$arr = array_map('sum', [1, 2, 3]);

print_r($arr);
