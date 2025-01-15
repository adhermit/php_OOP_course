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
    <p><?= $book1->displayDetails() ?></p>

    <h1>Manga</h1>
    <p><?= $manga1->displayDetails() ?></p>
</body>

</html>