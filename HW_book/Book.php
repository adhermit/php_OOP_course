<?php
class Book{
    private string $title;
    private float $price;
    private float $vat;

    public function __construct(string $title, float $price, float $vat){
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setVat($vat);
    }



    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of vat
     */
    public function getVat(): float
    {
        return $this->vat;
    }

    /**
     * Set the value of vat
     */
    public function setVat(float $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    public function getTotalWithVat(){
        return $this->price + $this->price * $this->vat / 100;
    }

    public function displayDetails(){
        return "Title: $this->title, Price: $this->price, VAT: $this->vat, Total: " . $this->getTotalWithVat();
    }
 }