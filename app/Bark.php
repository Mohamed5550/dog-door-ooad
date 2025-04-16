<?php

namespace App;

class Bark
{
    public string $sound;

    public function __construct(string $sound)
    {
        $this->sound = $sound;
    }

    public function getSound(): String
    {
        return $this->sound;
    }

    public function equals(Bark $bark) :Bool
    {
        return strtolower($this->getSound()) == strtolower($bark->getSound());
    }
}