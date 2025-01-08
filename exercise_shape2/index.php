<?php
require_once 'Rectangle.php';

$rectangle1 = new Rectangle(40, 6.5, "black");
?>
<h1>Rectangle</h1>
<h3>Length: <?= $rectangle1->getLength(); ?></h3>
<h3>width: <?= $rectangle1->getWidth(); ?></h3>
<h3>Area of rectangle is: <?= $rectangle1->calculateArea(); ?> </h3>
<p>The color is <?= $rectangle1->getColor(); ?></p>