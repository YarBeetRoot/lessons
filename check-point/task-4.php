<?php
/*Задача 4:
 Создайте переменную $day и присвойте ей числовое значение
 С помощью конструкции switch выведите фразу "Это рабочий день если $day от 1-5
 Если 6-7 "Это выходной день"
 Если переменная $day не попадает в диапазон выводить неизвестный день*/

require_once ('functions.php');
require_once ('header.php');

$day = rand(0,10); //Запишим произвольное число от 0 до 10 в переменную $day

echo checkDay($day);  //вызываем функцию, выводим на экран результат ее работы

require_once ('footer.php');