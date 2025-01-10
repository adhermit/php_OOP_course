<?php
class Ticket
{
    private int $quantity;
    private float $unitPrice;



    /**
     * Get the value of quantity
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of unitPrice
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * Set the value of unitPrice
     */
    public function setUnitPrice(float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function __construct(int $quantity, float $unitPrice)
    {
        if ($quantity) {
            $this->quantity = $quantity;
        } else {
            echo "Quantity is not valid";
        }

        $this->unitPrice = $unitPrice;
    }

    public function getTotal(): float
    {
        return $this->quantity * $this->unitPrice;
    }
}
