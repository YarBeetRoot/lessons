<?php
/*Задача 1:
 Создайте переменную $name и присвойте ей строковое значение содержащее ваше имя
 Создайте переменную $age и присвойте ей числовое значение
 Выведите: Меня зовут: "ваше имя"
 Выведите: Мой "ваш возраст" лет*/

require_once ('functions.php');
require_once ('header.php');

$name = 'Yaroslav';
$age = 35;

echo "Меня зовут: $name <br>";
echo "Мой возраст $age <br>";

require_once ('footer.php');