<?php
require_once 'Rectangle.php';
require_once 'Circle.php';

$rectangle1 = new Rectangle(40, 6.5, "black");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Rectangle</h1>
    <h3>Length: <?= $rectangle1->getLength(); ?></h3>
    <h3>width: <?= $rectangle1->getWidth(); ?></h3>
    <h3>Area of rectangle is: <?= $rectangle1->calculateArea(); ?> </h3>
    <p>The color is <?= $rectangle1->getColor(); ?></p>

    <?php
    $circle1 = new Circle(10, "red");
    ?>
    <h1>Circle</h1>
    <h3>Radius: <?= $circle1->getRadius(); ?></h3>
    <h3>Area of circle is: <?= $circle1->calculateArea(); ?></h3>
    <p>The color of circle is <?= $circle1->getColor(); ?></p>

    <h1>Count: <?= Shape::getCount() ?></h1>

</body>

</html>