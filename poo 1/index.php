<?php

require_once 'Bicycle.php';
$bike = new Bicycle();
var_dump($bike);

require_once 'car.php';
$car = new Bicycle();
var_dump($car);

// // Instanciation d'un nouvel objet $rockrider
// $rockrider = new Bicycle();
// $rockrider->color = 'yellow';

// // Instanciation d'un nouvel objet $tornado
// $tornado = new Bicycle();
// $tornado->color = 'black';


// $bike->color = 'blue';
// $bike->currentSpeed = 0;
// var_dump($bike); // then, another dump.

// var_dump($bike);
// $bike->dump();

// moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// moving car
echo $car->forward();
echo '<br> Vitesse voiture : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse voiture : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();


?>