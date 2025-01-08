<?php
class Product{
    public string $name;
    public float $price;
    public float $vat;

    public function getPriceWithTax(): float
    {
        $priceWithTax = $this->price + ($this->price * $this->vat)/100;
        return $priceWithTax;
    }
}