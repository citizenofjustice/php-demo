<?php

declare(strict_types=1);

/*
    0 -> new
    1 -> activated
    2 -> banned
*/

class UserStatuses {
    const CREATED = 0;
    const ACTIVATED = 1;
    const BANNED = 2;
}

class User{
    public $id;
    public $login;
    public $name;
    private $status;
    public $created;
    private $now;

    public function __construct(int $id, string $login, string $name, int $status, int $created) {
        $this->id = $id;
        $this->login = $login;
        $this->name = $name;
        $this->status = $status;
        $this->created = $created;
        $this->now = time();
    }

    public function isActive() {
        return $this->status == UserStatuses::ACTIVATED;
    }
    
    public function activate() {
        $this->status = UserStatuses::ACTIVATED;
    }

    public function ban() {
        $this->status = UserStatuses::BANNED;
    }


    public function save() {
        // save
    }
}

$user1 = new User(1, 'admin', 'Dave', UserStatuses::CREATED, time());

$user1->activate();

echo '<pre>';
var_dump($user1);
echo '</pre>';


// $user2 = new User(1, 'manager', 'Sam', 0, time());

// echo '<pre>';
// var_dump($user2);
// echo '</pre>';

?>