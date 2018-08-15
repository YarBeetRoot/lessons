<?

require_once 'classes.php';

$books = [];

$dbConfig = require_once 'configs/configs.php';
$configs = new Config($dbConfig);

$connection = new PdoConnection($configs->getConfigs());
$booksTableRows = $connection->getRows();

while ($booksTableRow = $booksTableRows->fetch())
{
    $className = $booksTableRow['type'];
    $books[] = new $className($booksTableRow);
}
