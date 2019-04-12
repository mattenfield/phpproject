<?php
session_start();
$name=$_SESSION['nameID'];
$link = mysqli_connect("127.0.0.1", "root", "", "db1_21700581");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "DELETE FROM test WHERE name = '$name'";

$result = mysqli_query($link,$sql); //first change - email



echo "Record has been deleted. </br>";
echo "<a href='wk6ex2.php'/>Home </a>";


mysqli_close($link);?>
