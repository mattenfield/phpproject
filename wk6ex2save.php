<?php

$email = $_POST['txtemail'];
$phone = $_POST['txttelno'];
$name = $_POST['txtname'];
$link = mysqli_connect("127.0.0.1", "root", "", "db1_21700581");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "UPDATE test SET email = '$email'";

$result = mysqli_query($link,$sql); //first change - email

$sql = "UPDATE test SET phone_number = '$phone'";

$result = mysqli_query($link,$sql); //second change - phone number


echo "Values have been updated. </br>";
echo "<a href='wk6ex2.php'/>Home </a>";


mysqli_close($link);?>
