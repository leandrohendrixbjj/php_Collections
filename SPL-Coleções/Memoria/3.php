<?php
// SplDoublyLinkedList: Recomenda-se usar quando não sabemos o tamanho da lista
// Observe a diferença de alocação de memória array e SplDoublyLinkedList

$arr = new SplDoublyLinkedList();
$value = 32769;

for ($row = 0; $row < $value; $row++) {
    $arr->push($row);
}

print_r(memory_get_usage() / 1024 / 1024); // Valor de memória alocada pelo PHP
