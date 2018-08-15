<?

/**
 * Class Book
 */
class Book
{
    protected $id;
    protected $name;
    protected $author;
    protected $file_path;
    protected $type;
    protected $sort_order;

    function __construct(array $bookData)
    {
        $this->id = $bookData['id'];
        $this->name = $bookData['name'];
        $this->author = $bookData['author'];
        $this->file_path = $bookData['file_path'];
        $this->type = $bookData['type'];
        $this->sort_order = $bookData['sort_order'];
    }

    public function getBooks()
    {
        $books = [];
        while ($booksTableRow = $result->fetch())
        {
            $className = $booksTableRow['type'];
            $books[] = new $className($booksTableRow);
        }
        return $books;
    }
}

/**
 * Class BookPdf
 */
class BookPdf extends Book
{
    public function printInfo()
    {
        $imgSrc = 'images/' . strtolower(substr($this->type, -3, 3)) . '.png ';
        $fileHref = 'files/' . $this->file_path;
        echo "
              <p>

                <img src={$imgSrc} />
                
                <a style='color: green' download href={$fileHref}>{$this->author}, {$this->name}</a>
                
              </p>";
    }
}

/**
 * Class BookTxt
 */
class BookTxt extends Book
{
    public function printInfo()
    {
        $imgSrc = 'images/' . strtolower(substr($this->type, -3, 3)) . '.png ';
        $fileHref = 'files/' . $this->file_path;
        echo "
              <p>

                <img src={$imgSrc} />
                
                <a style='color: red' download href={$fileHref}>{$this->author}, {$this->name}</a>
                
              </p>";
    }
}

/**
 * Class BookDoc
 */
class BookDoc extends Book
{
    public function printInfo()
    {
        $imgSrc = 'images/' . strtolower(substr($this->type, -3, 3)) . '.png ';
        $fileHref = 'files/' . $this->file_path;
        echo "
              <p>

                <img src={$imgSrc} />
                
                <a style='color: gray' download href={$fileHref}>{$this->author}, {$this->name}</a>
                
              </p>";
    }
}

/**
 * Class Config
 */
class Config
{
    protected $host;
    protected $baseName;
    protected $user;
    protected $password;
    protected $charset;


    function __construct(array $userConfigs)
    {
        $this->host = $userConfigs['host'];
        $this->baseName = $userConfigs['baseName'];
        $this->user = $userConfigs['user'];
        $this->password = $userConfigs['password'];
        $this->charset = $userConfigs['charset'];
    }

    public function getConfigs()
    {
        return $userConfigs = [
            'host' => $this->host,
            'baseName' => $this->baseName,
            'user' => $this->user,
            'password' => $this->password,
            'charset' => $this->charset,
        ];
    }
}

/**
 * Class PdoConnection
 */
class PdoConnection
{
    private $connection = null;

    function __construct(array $userConfigs)
    {
        try {

            $dsn = "mysql:host={$userConfigs['host']};dbname={$userConfigs['baseName']};charset={$userConfigs['charset']}";
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC
            ];

            $this->connection =  new PDO($dsn, $userConfigs['user'], $userConfigs['password'], $opt);
        } catch (Exception $e) {
            die('Подключение не удалось: ' . $e->getMessage());
        }
    }

    public function getRows()
    {
        return $this->connection->query('SELECT * FROM `books`');
    }
}