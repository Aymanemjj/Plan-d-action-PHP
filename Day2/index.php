<?php

require "Animal.php";
require "Bird.php";
require "Cat.php";
require "Dog.php";
require "PayableInterface.php";
require "NotifableInterface.php";
require "Client.php";
$animals = [new Dog("Rex", 5, "Woof") , new Cat("Pablo", 4, "meow"), new Bird("Coco", 1, "coucou")];

foreach($animals as $a){
    echo $a->talk();
}

$client = new Client();

echo $client->pay() . PHP_EOL;
echo $client->reimburse() . PHP_EOL;
echo $client->sendNotification() . PHP_EOL;
