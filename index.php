<?php
/* on instancie*/
require_once 'Bicycle.php';
$bike = new Bicycle();


require_once 'Car.php';
$car = new Car('red', 4, 'diesel');
var_dump($car);
/* $bike->color = "blue";
 $bike->currentSpeed = 0;
var_dump($bike); // then, another dump.*/

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();

$mercedes = new car( 'blue', 6, 'gas'); 


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();


$tornado->forward();

var_dump($tornado);
$tornado->dump(); //c'est quoi ça ??

/* si c'est public, demander comme ça*/



/* si c'est privé, demander comme ça*/
$bike-> setcolor("green");
$bike->setnbseat(4);
var_dump($bike->getnbSeat());$bike->setcurrentSpeed(80);
var_dump($bike->getcurrentSpeed());

/* méthode car*/

// Moving car
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() .' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

/* si c'est privé, demander comme ça*/
$car->setcolor("orange");
$car->setnbseats(8);

$car->setcurrentSpeed(80);
var_dump($car->getcurrentSpeed());

echo $car->start();
