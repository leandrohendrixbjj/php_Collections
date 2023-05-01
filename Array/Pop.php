<?php
// Remove o últimos elemento da lista

$cursos = ['NodeJs', 'PHP', 'MYsql'];

$ultimo = array_pop($cursos);

echo "Último: $ultimo" . PHP_EOL;
echo "<pre>";
print_r($cursos);
echo "</pre>";
