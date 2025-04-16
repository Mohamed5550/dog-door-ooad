<?php

use App\Bark;
use App\Remote;
use App\DogDoor;
use App\BarkRecognizer;

require "./vendor/autoload.php";

$door = new DogDoor;
$door->addAllowedBark(new Bark("rowlf"));
$door->addAllowedBark(new Bark("rooowlf"));
$door->addAllowedBark(new Bark("rawlf"));
$door->addAllowedBark(new Bark("Woof"));
$remote = new Remote($door);
$recognizer = new BarkRecognizer($door);

// test our dog barking
echo "Our dog barks\n";
$recognizer->recognize(new Bark("rowlf"));
echo "Our dog goes outside\n";

// test other dog barking
echo "Other dog barks\n";
$recognizer->recognize(new Bark("yip"));

echo "Our dog comes back and barks\n";
$recognizer->recognize(new Bark("rooowlf"));
echo "Our dog back inside\n";