<?php
// Utilizados para desconstruir o array em variáveis distintas.
$arr = ['name' => 1, 'age' => 2, 'city' => 3];

// Atribui o elemento de índice 'city' na variável $three
['city' => $three] = $arr;

echo $three . PHP_EOL;
