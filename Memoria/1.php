<?php
// memory_get_usage: seu retorno é em Bytes. Se dividir 1024, terá KB, 1024 terá MB....
//Observe a diferença de alocação de memória entre ambos os valores

$arr = [];
$value_1 = 32768;
$value_2 = 32769;

for ($row = 0; $row < $value_2; $row++) {
    $arr[$row] = $row;
}

print_r(memory_get_usage() / 1024 / 1024); // Valor de memória alocada pelo PHP
