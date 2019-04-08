<?php
  $mymarks["Year 1"] = 55;
  $mymarks["Year 2"] = 65;
  $mymarks["Year 3"] = 75;
?>

<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Year</th><th>Grade</th></tr>

<?php
while(list($index,$value) = each($mymarks))
{
    echo "<tr><td> $index </td> <td> $value </td></tr>";
}

  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["Year 3"];
?>
</table>
</body>
</html>
