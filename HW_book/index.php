<?php
require_once "Book.php";
require_once "Manga.php";

$book1 = new Book("The Catcher in the Rye", 10.99, 7);

$manga1 = new Manga("One Piece", 9.99, 7, "Shonen");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Books</h1>
    <h3><?= $book1->getTitle() ?></h3>
    <p>Price: <?= $book1->getPrice() ?></p>
    <p>VAT: <?= $book1->getVat() ?></p>
    <p>Total: <?= $book1->getTotalWithVat() ?></p>

    <h1>Manga</h1>
    <h3><?= $manga1->getTitle() ?></h3>
    <p>Price: <?= $manga1->getPrice() ?></p>
    <p>VAT: <?= $manga1->getVat() ?></p>
    <p>Type: <?= $manga1->getType() ?></p>
    <p>Total: <?= $manga1->getTotalWithVat() ?></p>
</body>

</html>