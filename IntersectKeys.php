<?php
// Retorna um array, com as chaves presentes em ambos arrays
$names = [
    1 => 'Leandro',
    2 => 'Soares',
    3 => 'Ribeiro'
];

$arr = [1 => 'Leandro', 3 => 'Soares'];

echo "<pre>";
print_r(array_intersect_key($names, $arr));
echo "</pre>";
