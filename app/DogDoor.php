<?php

namespace App;

class DogDoor {

    public bool $isOpen = false;

    public function open() {
        echo "The dog door opens\n";
        $this->isOpen = true;
        
        $this->closeAutomatically();
    }

    public function close() {
        echo "The dog door closes\n";
        $this->isOpen = false;
    }

    private function closeAutomatically()
    {
        echo "Waits 5 seconds before close\n";
        sleep(5);
        $this->close();
    }
}