<?php
$array = [1,2,'name'=>'Yar',4,5,6];
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}
foreach ($array as $key => $value){
    //echo "key: $key; Value: $value </br>";
}
$i = 0;
while ($i <10) {
    echo '<p>' . $i . '</p>';
    $i++;
}
do {
    echo $i;
    $i++;
} while ($i <10);
//$num = 5;
//$degree = 2;
echo myPow(5,2);
/**
 * Функция для возведения числа в степень
 *
 * @param $num Число для возведения в степень
 * @param $degree Степень в которую возводим
 * @return mixed
 */
function myPow(int $num, string $degree = NULL) {  //type hint
    $result = $num ** $degree;
    return $result;
}
$result = $num ** $degegree;
?>