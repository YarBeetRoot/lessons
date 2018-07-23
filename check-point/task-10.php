<?php
/*Задача 10:
 Написать функцию сортировки пузырьком, с возможностью доп. фильтрации результатов
с помощью callback функции*/

require_once ('functions.php');
require_once ('header.php');

$testArray = [10,5,2,7,1,11,20];

var_dump($testArray); //увидем наш массив на странице

$test = bubbleSort($testArray); //вызовем функцию сортировки и запишем результат в переменную

var_dump($test); //посмотрим на результат))

//пользовательская функция
function myFunction ($result) {
    return array_product($result);
}

//вызовем снова функцию, но теперь со вторым параметром
$testWithCallback = bubbleSort($testArray, 'myFunction');

var_dump($testWithCallback); //результат

bubbleSortByLink($testArray); //вызовем фунцию, которая изменяет массив по ссылке

var_dump($testArray); //массив  $testArray теперь отсортирован

require_once ('footer.php');
