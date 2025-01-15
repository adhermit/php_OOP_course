<?php
require_once "Book.php";

class Manga extends Book{
    private string $type;

    public function __construct(string $title, float $price, float $vat, string $type){
        $this->setType($type);
        parent::__construct($title, $price, $vat);
    }

    /**
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function displayDetails()
    {
        return "<h3>{$this->getType()}</h3>";
    }
}