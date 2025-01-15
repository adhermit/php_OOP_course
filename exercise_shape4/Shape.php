<?php
abstract class Shape
{
    private string $color;
    protected static int $count = 0;

    public function __construct(string $color)
    {
        $this->setColor($color);
        self::$count++;
    }

    /**
     * Get the value of color
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public abstract function calculateArea(): float;

    public static function getCount(): int
    {
        return self::$count;
    }
}
