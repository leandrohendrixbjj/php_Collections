<?php
//  Reduz um array para um único valor através de um processo iterativo via função callback
$arr = array(1, 2, 3, 4, 5);

var_dump(array_reduce($arr, "sum"));

function sum($list, $item)
{
    $list += $item;
    return $list;
}
