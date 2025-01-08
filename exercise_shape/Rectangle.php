<?php
class Rectangle{
    public float $length;
    public float $width;
    public string $color;
    
    public function __construct(float $length, float $width, string $color){
        $this->length = $length;
        $this->width = $width;
        $this->color = $color;
    }

    public function calculateArea(): float
    {
        $area = $this->length * $this->width;
        return $area;
    }
}