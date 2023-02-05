<?php

class Animal{
    public $name;
    public $health;
    public $power;
    public $alive;

    public function __construct(string $name, int $health, int $power) {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
        $this->alive = true;
    }

    public function caclDamage() {
        return $this->power*(mt_rand(100, 300) /200);
    }

    public function doDamage($damage) {
        $this->health -= $damage;

        if ($this->health < 0) {
            $this->health = 0;
            $this->alive = false;
        }
    }
}
class Dog extends Animal{

    
}

class Cat extends Animal{
    private $lifes;

    public function __construct(string $name, int $health, int $power) {
        parent::__construct($name, $health, $power);
        $this->lifes = 9;
    }
}


// class Mouse extends Animal{
//     private $hiddenLevel;

//     public function __construct(string $name, int $health, int $power) {
//         parent::__construct($name, $health, $power);
//         $this->hiddenLevel = 0.4;
//     }
// }

class GameCore{
    private $units;

    public function __construct(){
        $this->units = [];
    }

    public function addUnit(Animal $unit) {
        $this->units[] = $unit;
    }

    public function nextTick() {
        foreach($this->units as $unit) {
            $damage = $unit->caclDamage();
            echo '<pre>';
            var_dump($damage);
            echo '</pre>';
        }
    }
}



$core = new GameCore();

$murzik = new Cat('Murzik', 100, 10);
$bobik = new Dog('Bobik', 150, 10);
$jerry = new Dog('Jerry', 10, 20);

$core->addUnit($murzik);
$core->addUnit($bobik);
$core->addUnit($jerry);

$core->nextTick();


var_dump($murzik->caclDamage());



echo '<pre>';
var_dump($murzik);
echo '</pre>';