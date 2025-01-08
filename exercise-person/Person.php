<?php
class Person{
    public string $firstName;
    public string $lastName;
    public int $age;

    public function __construct(string $firstName, string $lastName, int $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
     }

     public function getFullName(){
        return $this->firstName . ' ' . $this->lastName;
     }

}