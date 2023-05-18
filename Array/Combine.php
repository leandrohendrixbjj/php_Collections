<?php

//  Cria um array usando um array para chaves e outro para valores
$keys = array('nome', 'idade', 'sexo');
$values = array('leandro', '20', 'M');

$arr = array_combine($keys, $values);

echo "<pre>";
print_r($arr);
echo "</pre>";
