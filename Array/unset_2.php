<?php

$arr = [
    "nome" => 'leandro',
    "status" => true
];
$arr['age'] = 30;

unset($arr); //Apaga o array

var_dump($arr);
