<?php
class Car
{
    public string $brand;
    public float $maxSpeed;
}

$car1 = new Car();
$car1->brand = 'Toyota';
$car1->maxSpeed = 225;

$car2 = new Car();
$car2->brand = "BMW";
$car2->maxSpeed = 275;


var_dump($car1);
var_dump($car2);