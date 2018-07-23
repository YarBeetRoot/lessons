<?php
/*Задача 9:
 Даны два упорядоченных по возрастанию массива.
Образовать из этих двух массивов единый упорядоченный по возрастанию массив.*/

require_once ('functions.php');
require_once ('header.php');

$arrayAlpha = [1,3,5,7,9,100];
$arrayBetta = [2,4,6, 5.5,8,0, -5];
//сольем два массива в новый
$mergedArray = array_merge($arrayAlpha, $arrayBetta);
//отсортируем новый массив
sort($mergedArray);
var_dump($mergedArray);

require_once ('footer.php');