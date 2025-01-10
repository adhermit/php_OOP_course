<?php
require_once 'Shape.php';

class Circle extends Shape{
    private float $radius;

    public function __construct(float $radius, string $color)
    {
        $this->setRadius($radius);
        parent::__construct($color);
    }

    public function setRadius(float $radius): float
    {
        return $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function calculateArea(): float
    {
        $area = pi() * $this->radius * $this->radius;
        return $area;
    }
}