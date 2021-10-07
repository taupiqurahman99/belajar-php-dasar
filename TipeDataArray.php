<?php
$values = array(10, 9, 8, 7, 5);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

//menampilkan salah satu data array
var_dump($names[0]); 

//merubah salah satu isi data array

$names[0] = "Budi";
var_dump($names);

//menghapus salah satu isi data array

unset($names[1]);
var_dump($names);

//menambahkan

$names[] = "Joko";
var_dump($names);

var_dump(count($names)); 
