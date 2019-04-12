<?php

$link = mysqli_connect("127.0.0.1", "root", "", "db1_21700581");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
	$sql = "SELECT * from test";
  $result = mysqli_query($link,$sql);

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";
}

mysqli_close($link);
?>
</body>
</html>
