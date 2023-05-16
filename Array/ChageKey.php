<?php
// Retorna um array com as chaves em minúsculo ou maiúsculo

$arr = ['nome' => 'leandro', 'age' => 30];

$arr = array_change_key_case($arr, CASE_UPPER);

print_r($arr);
