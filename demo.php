<?php

declare(strict_types=1);

/*
    0 -> new
    1 -> activated
    2 -> banned
*/

class User{
    public $id;
    public $login;
    public $name;
    private $status;
    public $created;
    public $now;

    public function __construct(int $id, string $login, string $name, int $status, int $created) {
        $this->id = $id;
        $this->login = $login;
        $this->name = $name;
        $this->status = $status;
        $this->created = $created;
        $this->now = time();
    }

    public function isActive() {
        return $this->status == 1;
    }
    
    public function activate() {
        $this->status = 1;
    }

    public function ban() {
        $this->status = 2;
    }


    public function save() {
        // save
    }
}

$user1 = new User(1, 'admin', 'Dave', 0, time());

$user1->activate();

echo '<pre>';
var_dump($user1);
echo '</pre>';


// $user2 = new User(1, 'manager', 'Sam', 0, time());

// echo '<pre>';
// var_dump($user2);
// echo '</pre>';

?>