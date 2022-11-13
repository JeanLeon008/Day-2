<?php
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