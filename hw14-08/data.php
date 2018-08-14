<?
//Подключение к бд
//TODO вынести в отдельный файл и использовать ООП
{
    require_once 'classes.php';

    $books = [];

    try {
        $dbConfig = [
            'host' => '127.0.0.1',
            'db' => 'homeWork',
            'user' => 'root',
            'pass' => 'root',
            'charset' => 'utf8',
        ];

        $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['db']};charset={$dbConfig['charset']}";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC
        ];

        $connect =  new PDO($dsn, $dbConfig['user'], $dbConfig['pass'], $opt);
    } catch (Exception $e) {
        die('Подключение не удалось: ' . $e->getMessage());
    }

    $sql = 'SELECT * FROM `books`';
    $result = $connect->query($sql);
    while ($bookData = $result->fetch())
    {
        $className = $bookData['type'];
        $books[] = new $className($bookData);
    }
}