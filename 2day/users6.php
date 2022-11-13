<?php
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name.'.class.php';
});

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