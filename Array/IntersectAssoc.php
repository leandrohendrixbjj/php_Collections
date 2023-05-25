<?php
// Retorna um array, com os valores em array que estão presentes em ambos arrays
$names = [
    1 => 'Leandro',
    2 => 'Soares',
    3 => 'Ribeiro'
];

$arr = [1 => 'Leandro', 2 => 'Soares'];

echo "<pre>";
print_r(array_intersect_assoc($names, $arr));
echo "</pre>";
