<?php
// Retorna os valores de uma coluna do array informado
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
);

$first_names = array_column($records, 'first_name');
print_r($first_names);
