<?php
session_start();
$quant = $_SESSION['quantityValue'];
$val = $_SESSION['price'];
$totalvalue = $quant*$val;
   echo "<h2> Your order qty is ".$quant."</h2>";
   echo "</br><h2> and the selected colour is $_POST[selcolour].</h2></br>";
   echo "</br><h2> and the total price is $totalvalue.</h2></br>";

?>
