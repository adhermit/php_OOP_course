<?php
require_once 'Shape.php';

class Rectangle extends Shape
{
    private float $length;
    private float $width;

    public function __construct(float $length, float $width, string $color)
    {
        $this->setLength($length);
        $this->setWidth($width);
        parent::__construct($color);
    }

    public function setLength(float $length): float
    {
        return $this->length = $length;
    }

    public function setWidth(float $width): float
    {
        return $this->width = $width;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function calculateArea(): float
    {
        $area = $this->length * $this->width;
        return $area;
    }
}
