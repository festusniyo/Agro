<?php
session_start();
?>
<html>
<head>
	<style type="text/css">
		table{
		border-collapse: collapse;
		width:1220px;
		height:80px;
		
}
		th,td{
			
				padding: 10px;
	
		}

		
		a{
			
			color:red;
		}
		h3{
			color: red;
		}

	</style>


</head>

	
<td colspan = "3"><a href ="products.php"></td><td  style = "font-size:50px; font-family:Times New Roman; color: green", Georgia, Serif;>Agro services</td>
<td><h2><a href="allproducts.php">allproducts</a></h2></td>
<td style="color: blue">
<?php

if($_SESSION["name"]) {
?>
welcome <?php echo $_SESSION["name"]; ?>.  <a href="Logout.php" tite="Logout">Logout.
<?php
}

else {

	header('location:login.php');
}

?>

</td>
	
