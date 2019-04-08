<?php
$total = 0;

$mymarks[450]=85;
$mymarks[451]=86;
$mymarks[452]=87;
$mymarks[453]=95;
$mymarks[454]=81;
$mymarks[455]=80;

for($i=450; $i<456; $i++){
  $total = $total + $mymarks[$i];

  echo "The Score I got for course number CO$i was $mymarks[$i]% <br/>";
}
$average = $total /  6;
$average = round($average,2);

echo "<br/><br/>The average score was $average% ";

?>
