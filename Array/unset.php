<?php

$arr = [
    "nome" => 'leandro',
    "status" => true
];
$arr['age'] = 30;

unset($arr['age']); //Remove atributo age

var_dump($arr);
