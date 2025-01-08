<?php
class Rectangle
{
    private float $length;
    private float $width;
    private string $color;

    public function __construct(float $length, float $width, string $color)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setColor($color);
    }

    public function setLength(float $length): float
    {
        return $this->length = $length;
    }

    public function setWidth(float $width): float
    {
        return $this->width = $width;
    }

    public function setColor(string $color): string
    {
        return $this->color = $color;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function calculateArea(): float
    {
        $area = $this->length * $this->width;
        return $area;
    }
}
