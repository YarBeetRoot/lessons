<?php
error_reporting(-1);
//Task 1

// @copyright Lizogub Yaroslav

/*creation date: 10.07.2018
@license	GNU General Public License version 3; see LICENSE.txt
*/


    echo "hello World";

//Task 2

    $channelName = "jw-tv";
    $manufacturer_address = "Baker Street 221b";
    $carColour = "green";
    $waterDegree = 18;
    $phone_model = "Nokia 3310";

//Task 3

    $a = 3;
    $b = 5;
    $c = 8;

    echo "<pre> $a , $b  , $c </pre>";

    $sum = $a + $b + $c;

    echo "<pre> $sum </pre>";

    $result = 2+6+2/5-1;

    echo "<pre> $result </pre>";

//Task 4

    $a = 1;
    $b = 2;
    $c;
    $d;

    echo "<pre> a = $a , b = $b </pre>";

    $c = $a;

    $d = & $b;

    echo "<pre> c = $c , d = $d </pre>";

    $a = 3;
    $b = 4;

    echo "<pre> a = $a , b = $b , c = $c , d = $d </pre>";

//Task 5

    define("FOO", 41);
    define("BAR", 33);

    $sum = FOO + BAR;

    echo "<h1> $sum </h1>";

    //BAR = 1;
    define("BAR", 31);
    echo "<h2>" . BAR . "</h2>";

//Task 6

    $a = 152; //integer

    $b = '152'; //string

    $c = 'London'; //string

    $d = array(152); //array

    $e = 15.2; //double || float

    $f = false; //boolean

    $g = true; //boolean

    echo "<p>$a - integer <br> $b - string <br> $c - string <br> $d[0] - element of array <br> $e - double or float <br>  </p>";

    var_dump($f, $g);



//Task 7

    $presentNum = 5;
    $studentNum = 10;

    echo "<br>{$presentNum} из {$studentNum}ти студентов посетили лекцию";

    echo '<br>' . $presentNum . ' из ' . $studentNum . 'ти студентов посетили лекцию<br>';


//Task 8

    $str_1 = "Доброе утро";
    $str_2 = "дамы";
    $str_3 = "и господа";

    var_dump($str_1, $str_2, $str_3);

    $str_1 .= ' ' . $str_2;
    $str_1 .= ' ' .  $str_3;

    echo "<p> $str_1 </p>";


//Task 9

    $arr_1 = array(0,1,'two',3,4);
    $arr_2 = [a,b,c,d,e];

    $arr_1['element'] = 'foo';

    unset($arr_2[0]);

    echo "first arrays second element: {$arr_1[2]} <br> second arrays second element: {$arr_2[2]} <br>";

    var_dump($arr_1, $arr_2);

    echo "<br>";

    var_dump(count($arr_1), count($arr_2));


//Task 10

    define("MIN", 10);
    define("MAX", 50);

    function checkNum ($x = NULL) {

        if ($x> MIN && $x < MAX) {
            return "+";
        }

        if ($x==MIN || $x==MAX) {
            return "+-";
        }

        return "-";

    }


//    var_dump(checkNum($x=2));
//    var_dump(checkNum($x=50));
//    var_dump(checkNum($x=30));

    $result = checkNum(2);

    echo "<br>2 входит в диапозон? Ответ: $result <br>";

    $result = checkNum(50);

    echo "<br>50 входит в диапозон? Ответ: $result <br>";

    $result = checkNum(30);

    echo "<br>30 входит в диапозон? Ответ: $result <br>";

//Task 11

    function solveSqrEquation($a, $b, $c ) {

        $discr = $b**2 - 4*$a*$c;

        $result = "";

        if ($discr > 0) {

            $x_1 = (-$b - sqrt($discr))/(2*$a);

            $x_2 = (-$b + sqrt($discr))/(2*$a);

            $result = "<p>Уравнение имеет 2 корня: x1 = " . round($x_1,1) . ", а х2 = " . round($x_2, 1) . "</p>";
        }

        if ($discr == 0) {

            $x_1 = (-$b)/(2*$a);

            $result = "<p>Уравнение имеет 1 корень: x1 = {$x_1}</p>";
        }

        if ($discr < 0) {
            $result = "Нет корней";
        }

        return $result;
    }

    var_dump(solveSqrEquation(10, 21, 10));
?>