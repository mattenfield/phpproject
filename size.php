<html>
 <head>
  <title>Shopping Page</title>
 </head>
 <?php session_start();
 $_SESSION['quantityValue'] = $_POST[selqty]; ?>
 <body>
  <form  action="selectcolour.php" method="post">
   Select the size of widgets you require
   <select name="selsize">
		<option>Small</option> ($15.75)
		<option>Medium</option> ($16.75)
		<option>Large</option> ($17.75)
		<option>Extra Large</option> ($18.75)
   </select>
   <br/><br/>
   <input type="submit" value="Buy"/>
  </form>
 </body>
</html>
