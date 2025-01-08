<?php
require_once "Product.php";

$product1 = new Product("HP Laptop", 930.34, 93.65);
var_dump($product1);
?>
<h1><?= $product1->name ?></h1>
<h3>Price = <?= $product1->price ?></h3>
<h3>VAT = <?= $product1->vat?></h3>
<h3>Final Price = <?= $product1->getPriceWithTax()?></h3>