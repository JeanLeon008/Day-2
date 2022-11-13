<?php
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