<?php
// Checa se uma chave ou índice existe em um array
$arr = [
    'nome' => 'leandro',
    'idade' => 30,
    'sexo' => 'M'
];

if (array_key_exists('nome', $arr)) {
    print_r("Achou");
}
