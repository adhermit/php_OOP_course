<?php
require_once 'Ticket.php';

$ticket = new Ticket(3.4, 12);

try{
        if($ticket->getQuantity()){
            $ticket->getQuantity();
        } 
    } catch (Exception $e) {
        echo $e->getMessage() . " Please check again!";
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
    <h3>Quantity: <?= $ticket->getQuantity(); ?></h3>
    <h3>Unit Price: <?= $ticket->getUnitPrice(); ?></h3>
    <h3>Total Price: <?= $ticket->getTotal() ?> </h3>
</body>

</html>