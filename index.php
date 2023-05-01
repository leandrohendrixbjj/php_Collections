<?php
// Add um ou mais elementos no INICIO da lista

$cursos = ['NodeJs'];

array_unshift($cursos, 'PHP', 'MYsql');

echo "<pre>";
print_r($cursos);
echo "</pre>";
