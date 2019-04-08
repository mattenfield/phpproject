<?php
  if ($_POST["txtage"] < 21)
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are 21 years old or over<br/>";
  }

  if($_POST["txtgender"] == "male" || $_POST["txtgender"] == "Male")
  {
    echo "You are Male.";
  }
  else if($_POST["txtgender"] == "female" || $_POST["txtgender"] == "Female")
  {
    echo "You are Female.";
  }
  else
  {
      echo "Invalid Input.";
  }

?>
