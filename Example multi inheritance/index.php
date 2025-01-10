<?php
require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php'; 

$dog1 = new Dog();
$dog1->makeSound();
$dog1->eat();

$cat1 = new Cat();