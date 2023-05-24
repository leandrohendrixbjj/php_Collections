<?php
// Preenche um array com o valor do parâmetro value, 
// usando os valores do array keys como chaves.

$arr = ['Leandro', 'Soares'];

$fillKeys = array_fill_keys($arr, 'nome');

echo "<pre>";
print_r($fillKeys);
echo "</pre>";
