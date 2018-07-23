<?php
/*Задача 5:
 Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3
и которые не делятся на 5*/

require_once ('functions.php');
require_once ('header.php');

findNumber(10000, '3', 5); //вызовем функцию, которая сделает все как надо

require_once ('footer.php');