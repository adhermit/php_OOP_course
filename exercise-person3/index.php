<?php
require_once "Person.php";
require_once "Employee.php";

$person1 = new Person("Raman", "Maharjan", 21);
$person2 = new Person("Ram", "Maharjan", 22);
?>
<p>Hello my name is <?=$person1->getFullName()?>. I am <?=$person1->getAge()?> years old. </p>
<p>Hello my name is <?=$person2->getFullName()?>. I am <?=$person2->getAge()?> years old. </p>

<?php
$Employee1 = new Employee("Raman", "Maharjan", 21, "Broadway Infosys", "Trainee");

var_dump($Employee1);
?>
<p>Welcome to <?=$Employee1->getCompany()?> Mr <?=$person2->getFullName()?>. As you are <?=$person2->getAge()?> years old. You will be joining as a <?=$Employee1->getPosition()?>. </p>