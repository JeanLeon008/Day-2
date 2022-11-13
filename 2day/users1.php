<?php
class User
{
    public $name = 'Жанарыс';
    public $login = 'JeanLeon';
    public $password = 'qwerty12345';
    public function showInfo(){
        echo "$this->name | $this->login | $this->password <br/>";
    }
}

$user1 = new User;
$user2 = new User;
$user3 = new User;

$user1->name = 'Leon';
$user1->login = 'Leo007';
$user1->password = 'qwerty1234';
$user1->showInfo();

$user2->name = 'Mark';
$user2->login = 'MarkII';
$user2->password = 'dsafads';
$user2->showInfo();

$user3->name = 'Jonh';
$user3->login = 'Jonh';
$user3->password = 'afdsfa';
$user3->showInfo();


