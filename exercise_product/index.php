<?php
require_once "Product.php";

$product1 = new Product();
$product1->name = "Laptop";
$product1->price = 1156;
$product1->vat = 93.65;

var_dump($product1);

?>
<h1><?= $product1->name ?></h1>
<h3>Price = <?= $product1->price ?></h3>
<h3>VAT = <?= $product1->vat ?></h3>