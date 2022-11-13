<?php
class User
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
    public function __destruct(){
        echo "Пользователь $this->login удален <br/>";
    }
}
class SuperUser extends User
{
    public $role;
    public function __construct(string $name, string $login, string $password, string $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }
    public function showInfo(){
        echo "$this->name | $this->login | $this->password | $this->role <br/>";
    
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