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

?>