<?php
require_once 'Rectangle.php';

$rectangle1 = new Rectangle(10, 5, "red");
?>
<h1>Rectangle</h1>
<h3>Length: <?= $rectangle1->length; ?></h3>
<h3>width: <?= $rectangle1->width; ?></h3>
<h3>Area of rectangle is: <?= $rectangle1->calculateArea(); ?> </h3>
<p>The color is <?= $rectangle1->color; ?></p>