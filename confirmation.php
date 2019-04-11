<?php
session_start();
   echo "<h2> Your order qty is ".$_SESSION['quantityValue']."</h2>";
   echo "</br><h2> and the selected colour is $_POST[selcolour].</h2>"
?>
