<?php
include("Car.php");
include("Train.php");

Car::makeNoise();
Train::makeNoise();

$train = new Train("Skoda");
echo $train->getMileage();