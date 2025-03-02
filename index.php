<?php

use App\BarkRecognizer;
use App\Remote;
use App\DogDoor;

require "./vendor/autoload.php";

$door = new DogDoor;
$remote = new Remote($door);
$recognizer = new BarkRecognizer($door);

echo "Dog barks\n";
$recognizer->recognize("Woof");
echo "Dog goes outside\n";
echo "Dog comes back and barks\n";
$recognizer->recognize("Woof");
echo "Dog back inside\n";