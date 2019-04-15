<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(8000) . " tax";
	html_footer();
?>
