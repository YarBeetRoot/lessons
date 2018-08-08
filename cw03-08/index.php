<?php
$host = '127.0.0.1';
$db   = 'beetroot';
$user = 'root';
$pass = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
];

try{
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $stmt = $pdo->query('SELECT * FROM student');

    /*while ($row = $stmt->fetch())
    {
        echo $row['name'] . "\n";
    }*/
    $result = $stmt->fetchAll();
    var_dump($result);
    if($pdo){
        echo "Connected to the <strong>$db</strong> database successfully!";
    }
    }catch (PDOException $e){
        // report error message
        echo $e->getMessage();
}
