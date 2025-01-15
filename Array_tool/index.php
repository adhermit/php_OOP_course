<?php
require_once "ArrayTool.php";

$array = [10, 20, 5, 4, 60];
?>
<h1> Max : <?php echo ArrayTool::getMax($array); ?></h1>
<h1> Min :<?php echo ArrayTool::getMin($array); ?></h1>