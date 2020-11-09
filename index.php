<?php

require_once 'Vehicle.php';
require_once'Bicycle.php';
require_once'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'LightableInterface.php';
require_once 'Bike.php';
require_once 'Speedometer.php';

$bicycle        = new Bicycle('Velo', 1,2);
$skateboard     = new Skateboard('Skate',1,4);
$car            = new Car('green', 4, 4, 'electric');
$truck          = new Truck('silver',3,10,'fuel',100,0);
$MotorWay       = new MotorWay(4,130);
$PedestrianWay  = new PedestrianWay(1,10);
$ResidentialWay = new ResidentialWay(2,50);
$bike           = new Bike('red','1',2);


echo PHP_EOL;

echo "Convertion kilomètres en miles : " . Speedometer::convertKmToMiles('10');

echo PHP_EOL;

echo "Convertion miles en kilomètres : " . Speedometer::convertMilesToKm('6.21371');

echo PHP_EOL;


