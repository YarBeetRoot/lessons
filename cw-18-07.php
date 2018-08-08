<?php

//$array = [1,2,3,-4,5,-6];



/*array_walk($array, function (&$value) {
    $value = $value + 10;
});
var_dump($array);*/

/*$result = array_filter($array, function ($value, $key) {
    //var_dump($key, $value); die;
    if ($value > 0 && !($value % 2)) return true;
}, ARRAY_FILTER_USE_BOTH);
var_dump($result);*/
/*
getPositiveNumbers($array, function ($items) {
    $result = [];
    foreach ($items as $item) {
       if (!(item % 2)) {
           $result[] = $item;
       }
    }
    return $result;
});

function getPositiveNumbers(array $array, callable  $callback = NULL) {
    $result = [];
    foreach ($array as $value) {
        if ($value > 0) {
            $result[] = $value;
        }
    }
    if ($callback) {
        $result = call_user_func($callback, $result);
    }

    return $result;
}*/

//$array = ['Vadim', 'Max']; //Изменить значение каждого элемента массива: ['Hello Vadim', 'Hello Max']

$array = [1,5,7,8,-9,3]; //Отфильтровать массив: оставить если элемент больше 3 и нечетный

/*array_walk($array, function(&$value){
    $value = 'Hello ' . $value;
});*/

$aaa = array_filter($array, function($value) {
    if ($value > 3 && ($value % 2)) return true;
});
var_dump($aaa);


?>