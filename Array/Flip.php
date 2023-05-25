<?php
// Retorna um array com suas relações trocadas. Valores seram chaves e Chaves valores
$arr = [
    'name' => 'leandro',
    'age' => 30
];

echo "<pre>";
print_r(array_flip($arr));
echo "</pre>";
