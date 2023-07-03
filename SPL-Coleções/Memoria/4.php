<?php

// Add elementos na posição desejada dentro de um array
$arr = new SplDoublyLinkedList();

$arr->add(0, 1);
$arr->add(1, 2);
$arr->add(0, 0);

print_r($arr);
