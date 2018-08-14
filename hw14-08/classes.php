<?
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
}

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