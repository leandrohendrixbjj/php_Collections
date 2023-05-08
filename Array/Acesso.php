<?php

$person = [
    "name" => 'Leandro',
    "age" => 30,
    "motors" => array(
        "marcas" => array("Honda", "Suzuki")
    )
];

echo $person['name'] . PHP_EOL;
echo $person['motors']['marcas'][0] . PHP_EOL;
echo $person['motors']['marcas'][1];
