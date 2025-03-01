<?php

use App\Remote;
use App\DogDoor;

require "./vendor/autoload.php";

$door = new DogDoor;
$remote = new Remote($door);

echo "Dog barks\n";
$remote->pressButton();
echo "Dog goes outside\n";;
echo "Dog comes back and barks\n";
$remote->pressButton();
echo "Dog back inside\n";