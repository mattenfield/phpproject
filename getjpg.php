<?php

  header("Content-type: image/jpeg");


  $link = mysqli_connect("127.0.0.1", "root", "", "db1_21700581");

  if (!$link) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  $sql = "SELECT image FROM monster WHERE id= $_GET[id]";

  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);

  $jpg = $row["image"];

  echo $jpg;
  mysqli_close($link);
?>
