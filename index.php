<?php include("class_lib.php"); ?>
<?php
	$stefan = new person();
  $jimmy = new person;
  $matt = new person;

  $stefan->set_name("Stefan Mischook");
	$jimmy->set_name("Nick Waddles");
  $matt->set_name("Matt Enfield");

  echo "Stefan's full name: " . $stefan->get_name();
	echo "<br/>Nick's full name: " . $jimmy->get_name();
  echo "<br/>Matt's full name: " . $matt->get_name();
?>
