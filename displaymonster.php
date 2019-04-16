<?php

error_reporting(0);
$link = mysqli_connect("127.0.0.1", "root", "", "db1_21700581");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$sql = "SELECT id,name FROM monster";

$result = mysqli_query($link, $sql);

echo "<table align='center' border='1'>";
echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

while($row = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>" . $row[id] . "</td>";
  echo "<td>" . $row[name] . "</td>";
  echo "<td><a href='getwav.php?id=" . $row[id]. "'>Click to play</a></td>";
  echo "<td><img src='getjpg.php?id=" . $row[id]. "' height='100' width='100'</td>";
  echo "</tr>";
}

echo "</table>";


mysqli_close($link);
?>
