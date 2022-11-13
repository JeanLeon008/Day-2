<?php
abstract class UserAbstract
{
    abstract protected function showInfo();
}
class User extends UserAbstract
{
    public $name = 'Жанарыс';
    public $login = 'JeanLeon';
    public $password = 'qwerty12345';
    static $count = 0;
    public function showInfo(){
        echo "<br/>Имя: $this->name <br/>Логин: $this->login <br/>Пароль: $this->password<br/>";
    }
    public function __construct(string $name, string $login, string $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        User::$count++;
    }
    
}

interface ISuperUser
{
    function getInfo();
}
interface IAuthorizeUser
{
    function auth($login, $password);
}
class SuperUser implements IAuthorizeUser
{
    public $name = 'Жанарыс';
    public $login = 'JeanLeon';
    public $password = 'qwerty12345';
    public $role;
    static $count = 0;
    public function __construct(string $name, string $login, string $password, string $role)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        $this->role = $role;
        SuperUser::$count++;
    }
    public function showInfo(){
        echo "<br/>Имя: $this->name <br/>Логин: $this->login <br/>Пароль: $this->password <br/>Роль: $this->role <br/><br/>";
    
    }
    function getInfo(){
        $rc = new ReflectionClass($this);
        $attributes = $rc->getProperties();
        
        $result = [];
        foreach ($attributes as $attribute) {
            $name = $attribute->getName();
            $result[$name] = $this->{$name};
        }
        
        return $result;
    }
    function auth($login,$password){
        if($login == $this->login and $password == $this->password){
            return true . '<br/><br/> True<br/>';
        }else{
            return false . ' False<br/><br/>';
        }
    }
    
}

$user1 = new User('Leon', 'Leon007', 'assd12f5af');
$user1->showInfo();

$user2 = new User('Mark', 'MarII', 'assdafs343daf');
$user2->showInfo();

$user3 = new User('Jonh', 'Jonh100', 'asaf323sf');
$user3->showInfo();

$user = new SuperUser('Zhanarys', 'JeanLeon', 'zxcvbnm', 'Admin');
$user->showInfo();

print_r($user->getInfo());

echo $user->auth('JeanLeon', 'zxcvbnm');
echo $user->auth('Jean', 'zxcvbnm');

$resCountUser = get_class_vars('User');
echo "Всего обычных пользователей: {$resCountUser['count']}<br>";
$resCountSuperUser = get_class_vars('SuperUser');
echo "Всего суперөпользователей: {$resCountSuperUser['count']}<br>";