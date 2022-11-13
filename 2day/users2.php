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
    public function _destruct(){
        echo "Пользователь $this->login удален <br/>";
    }
}

$user1 = new User('Leon', 'Leon007', 'assd12f5af');
$user1->showInfo();

$user2 = new User('Mark', 'MarII', 'assdafs343daf');
$user2->showInfo();

$user3 = new User('Jonh', 'Jonh100', 'asaf323sf');
$user3->showInfo();

$user1->_destruct();
$user2->_destruct();
$user3->_destruct();
