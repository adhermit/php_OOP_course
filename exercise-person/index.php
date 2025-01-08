<?php
require_once "Person.php";

$person1 = new Person("Raman", "Maharjan", 21);
?>
<p>Hello my name is <?=$person1->getFullName()?>. I am <?=$person1->age?> years old. </p>