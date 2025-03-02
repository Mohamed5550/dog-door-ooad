<?php

namespace App;

use App\DogDoor;

class BarkRecognizer
{
    public DogDoor $door;

    public function __construct(DogDoor $door)
    {
        $this->door = $door;
    }

    public function recognize(string $bark)
    {
        echo "Bark recognizer heard a $bark\n";
        $this->door->open();
    }
}