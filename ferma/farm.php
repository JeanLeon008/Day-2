<?php
abstract class AnimalBird
{
    static function walk(){
        echo 'Вжих-вжих-топ-топ<br>';
    }
}
abstract class AnimalHoof
{
    static function walk(){
        echo 'Топ-топ<br>';
    }
}

class Cow extends AnimalHoof
{
    static function say(){
        echo '<br>Му!<br>';
    }
}
class Pig extends AnimalHoof
{
    static function say(){
        echo '<br>Хрю!<br>';
    }
}
class Horse extends AnimalHoof
{
    static function say(){
        echo '<br>Игого!<br>';
    }
}

class Chicken extends AnimalBird
{
    static function say(){
        echo '<br>Кукареку!<br>';
    }
}
class Goose extends AnimalBird
{
    static function say(){
        echo '<br>Га-га-га!<br>';
    }
}
class Turkey extends AnimalBird
{
    static function say(){
        echo '<br>Буль-буль-буль!<br>';
    }
}

class Farm
{
    public $animals = [];
}
class FarmBird
{
    public $animals = [];
}
class Farmer
{
    public function addAnimal($farm, $animal){
        $nameAnimal = get_class($animal);
        $farm->animals[] = $nameAnimal;
        $nameAnimal::walk();
    }
    public function rollCall($farm){
        shuffle($farm->animals);
        foreach($farm->animals as $v){
            echo $v::say();
        }
    }
}
$farmer = new Farmer;
$farm = new Farm;
$farmbird = new FarmBird;

$cow = new Cow;
$pig1 = new Pig;
$pig2 = new Pig;
$chicken = new Chicken;
$turkey1 = new Turkey;
$turkey2 = new Turkey;
$turkey3 = new Turkey;
$horse1 = new Horse;
$horse2 = new Horse;
$goose = new Goose;

$farmer->addAnimal($farm, $cow);
$farmer->addAnimal($farm, $pig1);
$farmer->addAnimal($farm, $pig2);
$farmer->addAnimal($farmbird, $chicken);
$farmer->addAnimal($farmbird, $turkey1);
$farmer->addAnimal($farmbird, $turkey2);
$farmer->addAnimal($farmbird, $turkey3);
$farmer->addAnimal($farm, $horse1);
$farmer->addAnimal($farm, $horse2);
$farmer->addAnimal($farmbird, $goose);

$farmer->rollCall($farm);
$farmer->rollCall($farmbird);



