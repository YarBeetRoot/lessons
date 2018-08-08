<?php
/*Задача 2:
 Создайте константу и присвойте ей значение
 Проверьте существует ли константа.
Выведите значение константы
 Попытайтесь изменить ее значение.*/

require_once ('functions.php');
require_once ('header.php');

const PASSWORD = 'qwerty';

if (defined('PASSWORD')) {
    echo PASSWORD;
} else {
   echo 'Такой константы не существует';
}
//PASSWORD = 'asdfg';   //error!

require_once ('footer.php');

