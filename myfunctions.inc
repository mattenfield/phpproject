<?php
function html_header($pageTitle)
{
	echo "<html><title> $pageTitle </title></head>";
	echo "<body>";
}

function html_h1($text)
{
	echo "<h1> $text </h1>";
}
function html_h2($text)
{
	echo "<h2> $text </h2>";
}
function html_footer()
{
	echo "</body>";
	echo "</html>";
}
function calculatetax($salary, $rate=40, $allowance=12000)
{
  $salaryallowance = $salary - $allowance;

  if($salaryallowance>0)
  {
      $tax = ($salaryallowance * ($rate/100));
      return $tax;
  }
  else
  {
    $tax = 0;
    return $tax;
  }


}

?>
