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

    public function recognize(Bark $bark)
    {
        echo "Bark recognizer heard a {$bark->getSound()}\n";
        $allowedBarks = $this->door->getAllowedBarks();
        foreach($allowedBarks as $allowedBark) {
            if($bark->equals($allowedBark)) {
                $this->door->open();
                return;
            }
        } 
        echo "This dog is not allowed\n";
    }
}