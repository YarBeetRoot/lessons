<?php
phpinfo();exit;
/*Задача 10:
 Написать функцию сортировки пузырьком, с возможностью доп. фильтрации
результатов с помощью callback функции

1. Сравнивать поочереди пары элементов массива, и менять их местами при необходимости.
2. Вызывать рекурсивно функцию, до тех пор пока не выстроим элементы по порядку


*/
$testArray = [10,5,2,7,1,11,20];

$test = bubbleSort($testArray);
var_dump($testArray);
var_dump($test);

function myFunction ($result) {
    return array_product($result);
}

/**
 * функция сортировки массива пузырьком, изменяет переданный массив по ссылке
 * @param array $array2sort
 * @param bool $revers
 * @param callable|NULL $callback
 * @return bool
 */
function bubbleSortByLink (array &$array2sort, bool $revers = false, callable $callback = NULL) {
    //Переберем элементы массива, начиная с первого и закончим итерации на 1 шаг раньше,
    // так как будем сравнивать элементы парами
    for ($i = 0; $i < count($array2sort)-1; $i++) {
        if ($array2sort[$i] > $array2sort[$i+1]) {
            var_dump(1);
            array_splice($array2sort, $i, 2, $replacement = [$array2sort[$i+1], $array2sort[$i]]);
            //если не все еще гладко, вызовем рекурсивно нашу функцию,
            return bubbleSortByLink($array2sort, $revers, $callback);
        }
    }

    //Проверим необязательный параметр и если необходимо развернем элементы массива
    if ($revers) $array2sort = array_reverse($array2sort);
    //Вызываем пользовательскую колбэк функцию
    if ($callback) {
        $array2sort = call_user_func($callback, $array2sort);
    }
    return true;
}

/**
 * функция сортировки массива пузырьком, возвращает новый отсортированный массив
 * @param array $array2sort
 * @param callable|NULL $callback
 * @return array|mixed
 */
function bubbleSort (array $array2sort, callable $callback = NULL) {

    $result = $array2sort;

    for ($i = 0; $i < count($result)-1; $i++) {
        if ($result[$i] > $result[$i+1]) {
            array_splice($result, $i, 2, $replacement = [$result[$i+1], $result[$i]]);
            //если не все еще гладко, вызовем рекурсивно нашу функцию,
            return bubbleSort($result, $callback);
        }
    }

    //Вызываем пользовательскую колбэк функцию
    if ($callback) {
        $result = call_user_func($callback, $result);
    }
    return $result;
}


/*Задача 9:
 Даны два упорядоченных по возрастанию массива. Образовать из этих двух массивов
 единый упорядоченный по возрастанию массив.*/

$arrayAlpha = [1,3,5,7,9,100];
$arrayBetta = [2,4,6, 5.5,8,0, -5];
//сольем два массива в новый
$mergedArray = array_merge($arrayAlpha, $arrayBetta);
//отсортируем новый массив
sort($mergedArray);
var_dump($mergedArray);

/*Задача 8:
 Создайте файл 'test.txt' и запишите в него массив ['name' => 'Your name', 'age' => 'Your age'].
 Считайте данные из файла 'test.txt' и выведите их на экран.*/

//$fileName = 'test.txt';
//$data = [
//    'name' => 'Yarick',
//    'age' => '35'
//];
//
//file_put_contents($fileName, serialize($data));
//$data2print = unserialize(file_get_contents($fileName));
//echo nl2br("Имя:   {$data2print['name']} \n Возраст: {$data2print['age']}");

//InnoDB   and myisam
?>

