<?php


/*Задача 1: Информация о товарах в корзине
Написать функцию для получения итогов (общей информации) о корзине покупок.
Функция принимает массив c информацией о выбранных товарах примерно такого вида:
$products = array(
    array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
);
Возвращает массив, который содержит:
• Общую сумму покупок
• Общее количество выбранных товаров*/

$products = [

    ['name' => 'Телевизор', 'price' => '400', 'quantity' => 1],
    ['name' => 'Телефон', 'price' => '300', 'quantity' => 3],
    ['name' => 'Кроссовки', 'price' => '150', 'quantity' => 2],

];


/**
 * Функция для получения итогов (общей информации) о корзине покупок.
 * @param array $products  массив c информацией о выбранных товарах
 * @return array Возвращает массив, который содержит:
• Общую сумму покупок
• Общее количество выбранных товаров
 */

function getCartInfo (array $products = []){

    $totalSum = 0;

    $totalQuantity = 0;

    foreach ($products as $product) {

        $productTotalPrice = $product['price'] * $product['quantity'];

        $totalSum += $productTotalPrice;

        $totalQuantity += $product['quantity'];

    }

    return $cartInfo = ['totalSum' => $totalSum, 'totalQuantity' => $totalQuantity];

}

/*Задача 2: Квадратное уравнение  Частично используйте код из прошлого домашнего задания.
Написать функцию, которая решает квадратное уравнение. Функция принимает 3 аргумента
(коефициенты).
Возвращает:
• Массив с двумя корнями х1, х2, если D > 0
• Один корень х, если D = 0
• false, если D < 0*/


/**
 * функция решает квадратное уравнение
 * @param $a коефициент 1
 * @param $b коефициент 2
 * @param $c коефициент 3
 * @return array|bool|float|int
 */
function solveSqrEquation($a, $b, $c ) {

    $discr = $b**2 - 4*$a*$c;

    if ($discr > 0) {

        $x_1 = (-$b - sqrt($discr))/(2*$a);

        $x_2 = (-$b + sqrt($discr))/(2*$a);

        $result = ['x1' => $x_1, 'x2' => $x_2];

    } elseif ($discr == 0) {

        $x_1 = (-$b)/(2*$a);

        $result = $x_1;

    } else {

        $result = false;

    }

    return $result;
}