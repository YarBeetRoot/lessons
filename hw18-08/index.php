<?

//Создать класс User у которого вы будете вызывать метод getSettings
// и класс Setting которому вы делегируете реалазацию этого метода.

class User
{
    private $id;
    private $name;
    private $setting;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function __call($method, $arguments)
    {
        if(method_exists($this->setting, $method))
        {
            return call_user_func_array(array($this->setting, $method), $arguments);
        }
    }

    public function __set($name, $value)
    {
        if ($name == 'setting') $this->$name = $value;
    }

}

class Setting
{
    private $active = false;
    private $language;
    private $friends;

    public function __construct(bool $active, string $language, array $friends)
    {
        $this->active = $active;
        $this->language = $language;
        $this->friends = $friends;
    }

    public function getSettings()
    {
        return [$this->active, $this->language, $this->friends];
    }
}

$user = new User(10, 'Yar');
$setting = new Setting(true, 'russian', ['Jack', 'Joe']);
$user->setting = $setting;
var_dump($user->getSettings());