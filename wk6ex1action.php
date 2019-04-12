<?php
$sql = "INSERT INTO test (name,email,phone_number)";
$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

  $link = mysqli_connect("127.0.0.1", "root", "", "db1_21700581");

  if (!$link) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  $result = mysqli_query($link,$sql);

	$sql = "SELECT * from test";

  $result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}

  mysqli_free_result($result);
  mysqli_close($link);
?>
