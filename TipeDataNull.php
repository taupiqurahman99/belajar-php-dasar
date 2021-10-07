<?php

$name = "Eko";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Name : ";
echo $age;
echo "\n";

echo "Is name null? : ";
var_dump(is_null($name));
echo "\n";

// contoh menghapus variabel
$contoh = "Eko";
unset($contoh);


$contoh = "Kurniawan";
$contoh = null;

// mengecek variable nya ada atau engga dan isinya tidak null
var_dump(isset($contoh));