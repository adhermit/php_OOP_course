<?php
require_once 'Person.php';

class Employee extends Person
{

    protected string $company;
    protected string $position;

    public function __construct(string $firstName, string $lastName, int $age, string $company, string $position)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->setCompany($company);
        $this->setPosition($position);
    }


    /**
     * Get the value of company
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * Set the value of company
     */
    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of posotion
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of posotion
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getFullName()
    {
        return parent::getFullName() . ' ' .$this->getCompany(). ' ' . $this->getPosition();
    }
}
