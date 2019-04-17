<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
  $tax = 0.22;
	$percent = 1-$tax;
  $net = $gross * $percent;
  echo $net;
?>
</body>
</html>
