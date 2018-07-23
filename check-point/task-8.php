<?php
/*Задача 8:
 Создайте файл 'test.txt' и запишите в него массив ['name' => 'Your name', 'age' => 'Your age'].
 Считайте данные из файла 'test.txt' и выведите их на экран.*/

require_once ('functions.php');
require_once ('header.php');

$fileName = 'test.txt';
$data = [
    'name' => 'Yarick',
    'age' => '35'
];

file_put_contents('storage/' . $fileName, serialize($data));
$data2print = unserialize(file_get_contents('storage/' . $fileName));
echo nl2br("Имя:   {$data2print['name']} \n Возраст: {$data2print['age']}");

require_once ('footer.php');