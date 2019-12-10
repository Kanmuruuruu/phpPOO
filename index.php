<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$c = new Car("red",4,3);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

echo $c->forward();
echo '<br> Vitesse de la voiture: ' . $c->getCurrentSpeed() . ' km/h' . '<br>';
echo $c->brake();
echo '<br> Vitesse de la voiture: ' . $c->getCurrentSpeed() . ' km/h' . '<br>';
echo $c->brake();
