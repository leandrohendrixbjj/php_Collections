<?php
// SplFixedArray
// Observe a diferença de alocação de memória entre o script anterior

$arr = new SplFixedArray(32769);
$value = 32769;

for ($row = 0; $row < $value; $row++) {
    $arr[$row] = $row;
}

print_r(memory_get_usage() / 1024 / 1024); // Valor de memória alocada pelo PHP
