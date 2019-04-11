<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $_POST[selqty] ?> widgets you are ordering
<?php session_start();
$_SESSION['quantityValue'] = $_POST[selqty];
$_SESSION['price'] = $_POST[txtprice];?>

   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>
