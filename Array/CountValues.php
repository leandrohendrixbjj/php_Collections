<?php

//Conta o numero de valores que se repete no array
$arr = array("ola", "mundo", "ola");
$count = array_count_values($arr);

echo "<pre>";
print_r($count);
echo "</pre>";
