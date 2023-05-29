<?php

// retorna um array contendo todos os valores de array que estão presentes 
// nos outros argumentos. Note que as chaves são preservadas.

$arr = array("nome" => "leandro", "max", "taka");
$arr1 = array("nome_1" => "bola", "leandro", "casca");

print_r(
    array_intersect($arr, $arr1)
);
