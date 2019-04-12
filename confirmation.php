<?php
session_start();
$quant = $_SESSION['quantityValue'];
$size = $_SESSION['size'];
   echo "<h2> Your order qty is ".$quant."</h2>";
   echo "</br><h2> and the selected colour is $_POST[selcolour].</h2></br>";
   echo "</br><h2> and the selected size is $size.</h2></br>";

   switch ($size) {
case $size == 'Small'; $price=15.75; break;
case $size == 'Medium'; $price=16.75; break;
case $size == 'Large'; $price=17.75; break;
case $size == 'Extra Large'; $price=18.75; break;
default: $price=15.75;
}

$totalvalue = $price*$quant;

   echo "</br><h2> and the total price is $$totalvalue.</h2></br>";

?>
