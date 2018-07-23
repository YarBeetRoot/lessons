<?php
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

/**
 * Функция записывает в сессию строку с URI текущей страницы
 */
function setUserVisitedPages () {
    session_start();
    $_SESSION['visitedPages'][] = $_SERVER['REQUEST_URI'];
}

/**
 * Функция получает из сессии массив с посещенными страницами и выводит их на экран
 */
function getUserVisitedPages () {
    $visitedPages = $_SESSION['visitedPages'];
    $visitedPages = array_unique($visitedPages); //отфильтруем повторяющиеся значения
    echo "Вы были на этих страницах: <br>";
    foreach ($visitedPages as $page) {
        echo $page . '<br>';
    }
}

/**
 * @return string
 */
function setVisitsCounter () {
    if (isset($_COOKIE['visits-counter'])) {
        setcookie('visits-counter', ++$_COOKIE['visits-counter'], 0, '/');
        return 'Вы на этой странице <b>' . $_COOKIE['visits-counter'] . '-й</b> раз <br>';
    } else {
        setcookie('visits-counter', 1, 0, '/');
        return 'Вы первый раз на этой странице <br>';
    }
}

/**
 * @return string
 */
function getLastVisitDate() {
    $currentDate = date('Y-m-d h:i a');
    setcookie('last-visit', $currentDate, 0, '/');
    return isset($_COOKIE['last-visit']) ?  'Последний раз Вы были здесь <br> <b>' . $_COOKIE['last-visit'] . '</b>' : '';
}

/**
 * функция ищет в диапозоне от 0 до $limit цифру $needle, проверяет делится ли это
 * число на $denominator и выводит все соответствующие числа на экран
 * @param int $limit
 * @param string $needle
 * @param int $denominator
 */
function findNumber (int $limit, string $needle, int $denominator) {
    for ($num = 0; $num <$limit; $num++) {
        if (stripos($num, $needle)!==false && ($num % $denominator)) {
            echo $num . ' ,';
        }
    }
}

/**
 * Проверяет день недели, возращает строку с текстом
 * @param $day
 * @return string
 */
function checkDay ($day) {
    $workDayStr = 'Это рабочий день';
    $weekEndStr = 'Это выходной день';
    $unknownDay = 'Это неизвестный день';

    switch ($day) {
        case 1:
            $text = $workDayStr . " ($day)";
            break;
        case 2:
            $text = $workDayStr . " ($day)";
            break;
        case 3:
            $text = $workDayStr . " ($day)";
            break;
        case 4:
            $text = $workDayStr . " ($day)";
            break;
        case 5:
            $text = $workDayStr . " ($day)";
            break;
        case 6:
            $text = $weekEndStr . " ($day)";
            break;
        case 7:
            $text = $weekEndStr . " ($day)";
            break;
        default:
            $text = $unknownDay . " ($day)";
    }
    return $text;
}

/**
 * Функция проверяет диапазон числа
 * @param $age
 * @return string
 */
function checkAge ($age) {
    if ($age >= 18 && $age <= 59) {
        $text =  'Вам еще работать и работать';
    } elseif ($age > 59) {
        $text =  'Вам пора на пенсию';
    } else {
        $text = 'Вам еще рано работать';
    }
    return $text;
}