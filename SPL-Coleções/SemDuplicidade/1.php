<?php
// SplObjectStorage: não permite valores duplicados. Aceita apenas objetos 
//para essa validação

class Person
{
    public $name = 'leandro';
}
class Person2
{
    public $name = 'soares';
}


$arr = new SplObjectStorage();
$o1 = new Person();
$o2 = new Person2();
$o3 = $o2;

$arr->attach($o1);
$arr->attach($o2);
$arr->attach($o3);

echo "<pre>";
print_r($arr);
echo "</pre>";
