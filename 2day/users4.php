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
    public function showInfo(){
        echo "$this->name | $this->login | $this->password <br/>";
    }
    public function __construct(string $name, string $login, string $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
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
    public function __construct(string $name, string $login, string $password, string $role)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        $this->role = $role;
    }
    public function showInfo(){
        echo "$this->name | $this->login | $this->password | $this->role <br/>";
    
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
            return true . ' True';
        }else{
            return false . ' False';
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