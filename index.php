<?php
// memory_get_usage: seu retorno é em Bytes. Se dividir 1024, terá KB, 1024 terá MB....
// Observe a diferença de alocação de memória entre ambos os valores

$arr = new SplFixedArray(32769);
$value = 32769;

for ($row = 0; $row < $value; $row++) {
    $arr[$row] = $row;
}

print_r(memory_get_usage() / 1024 / 1024); // Valor de memória alocada pelo PHP
