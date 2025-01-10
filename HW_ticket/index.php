<?php
require_once 'Ticket.php';

$errormessage = "";

//try{
//      if($ticket->getQuantity()){
//        $ticket->getQuantity();
//  } 
//   } catch (Exception $e) {
//echo $e->getMessage() . " Please check again!";
//  }

try {
    $ticket = new Ticket(3.4, 12);
} catch (Exception $e) {
    $errormessage= $e->getMessage();
} catch (TypeError $e) {
    $errormessage= $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if(isset($ticket)) : ?>
    <h3>Quantity: <?= $ticket->getQuantity(); ?></h3>
    <h3>Unit Price: <?= $ticket->getUnitPrice(); ?></h3>
    <h3>Total Price: <?= $ticket->getTotal() ?> </h3>
    <?php else : ?>
    <h3><?= $errormessage?></h3>
    <?php endif; ?>
</body>

</html>