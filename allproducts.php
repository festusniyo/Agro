<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
			text-align: center;
			width: 400px;
			height: 300px;
			margin: middle;
			border-radius: 10px;
			background-color: gray;

		}
		th{
			text-align: center;
		}
		
	</style>
	<title></title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>

</body>
</html>
<a href="products.php" style="color: red;">Back</a>
<h1><p align="center"><i><strong style="color: white"> product dufite muri stock yacu</strong></i></p></h1>
<?php
$con=mysqli_connect("localhost","root","","stock");
if(!$con)
{
	echo 'Error'.mysqli_error();
}

$se="SELECT * FROM all_product";
$select=mysqli_query($con,$se);
?>
<table border="2" align="center">
<tr><th style="color: black">Number</th><th style="color: black">Product_Name</th><th style="color: black">Cost</th><th style="color: black">Quantity</th><th style="color: black">ACTION</th>
<?php
while($row=mysqli_fetch_array($select)) 
{
	$a=$row['pro_id'];
	$b=$row['product_name'];
	$c=$row['cost'];
	$d=$row['quantity'];
	?>
	<tr ><td style="color: black"><?php echo $a;?></td><td style="color: black"><?php echo $b;?></td>
		<td style="color: black"><?php echo $c;?></td><td style="color: black"><?php echo $d;?></td>
		<td><a href="<?php echo 'command_form.php?id='.$a;?>">COMMAND</a></td>
		</tr>
		<?php

}
?>
</table>

<?php
mysqli_close($con);
?>
<br/>
<br/><br/>
<tr>
<?php
include("footer.php");
?>
</tr>