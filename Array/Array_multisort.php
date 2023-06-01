<?php
// Ordena vários arrays
$ar1 = array(3, 2, 1);
$ar2 = array(4, 5, 0);

array_multisort($ar1, $ar2);

print_r($ar1);
print_r($ar2);
