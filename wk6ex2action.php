<?php
error_reporting(0);
$link = mysqli_connect("127.0.0.1", "root", "", "db1_21700581");

session_start();
$_SESSION['nameID'] = $_GET[id];

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

	$sql = "SELECT * from test where name = '$_GET[id]' ";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($result);
  ?>
<html>
<body>
<form action="wk6ex2save.php" method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row[name] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row[phone_number] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row[email] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
<form action="wk6ex2delete.php" method="post">
  <a href="wk6ex2delete.php" onclick="return confirm('Are you sure you want to delete this record?');"/> Delete </a>
</form>

</body>


<?php mysqli_close($link);?>
