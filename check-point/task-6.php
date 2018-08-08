<?php
/*Задача 6:
 Использую куки выводите информацию о количестве посещений и дате последнего посещения.*/

require_once ('functions.php');

$visitsQuantity = setVisitsCounter();
$lastVisitText = getLastVisitDate(); //Присвоим переменной $lastVisitText результат работы фунцкии getLastVisitDate()

require_once ('header.php');

echo $visitsQuantity;
echo $lastVisitText;

require_once ('footer.php');
