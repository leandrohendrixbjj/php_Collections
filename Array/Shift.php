<?php
// Remove o primeiro elemento da lista

$cursos = ['NodeJs', 'PHP', 'MYsql'];

$primeiro = array_shift($cursos);

echo "Primeiro: $primeiro" . PHP_EOL;
echo "<pre>";
print_r($cursos);
echo "</pre>";
