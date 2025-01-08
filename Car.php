<?php
class Car
{
    public string $brand;
    public float $maxSpeed;
}

$car = new Car();
$car->brand = 'Toyota';
$car->maxSpeed = 225;

var_dump($car);
