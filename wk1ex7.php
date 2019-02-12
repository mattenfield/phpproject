<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
  $net = $gross * 0.78;
	echo $gross;
  echo $net;
?>
</body>
</html>
