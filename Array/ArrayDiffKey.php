<?php

// Computa a diferença entre arrays usando as chaves na comparação

$array1 = array('azul' => 1, 'vermelho' => 2, 'verde' => 3, 'roxo' => 4);
$array2 = array('verde' => 5, 'amarelo' => 6, 'ciano' => 8);

$diff = array_diff_key($array1, $array2);

echo "<pre>";
print_r($diff);
echo "</pre>";
