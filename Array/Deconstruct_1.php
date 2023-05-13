<?php

// Utilizados para desconstruir o array em variáveis distintas.
$arr = ['name', 'age', 'city'];

[$name, $age, $city] = $arr;
[,, $city] = $arr;

echo $name . PHP_EOL; //name
echo $age . PHP_EOL; //age
echo $city; //City
