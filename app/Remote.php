<?php

namespace App;

class Remote {
    private DogDoor $door;

    public function __construct(DogDoor $door)
    {
        $this->door = $door;
    }

    public function pressButton()
    {
        if($this->door->isOpen) {
            $this->door->close();
        } else {
            $this->door->open();
        }
    }
}