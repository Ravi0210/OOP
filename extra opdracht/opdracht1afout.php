<?php

class team
{
    public $name;
    public $players = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addPlayers($ayoubletnouisop)
    {
        $this->players[] = $ayoubletnouisop;
    }
}

class player
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

}

$optic = new team("optic");
$speler1 = new player("Crimsix", 14);
$speler2 = new player("skumpy", 15);

$optic->addPlayers($speler1);
$optic->addPlayers($speler2);

foreach ($optic->players as $player) {
    echo $player->name;
}