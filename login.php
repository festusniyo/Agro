<?php
include("upper.php");
?>
<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('127.0.0.1:3306','root','', 'stock') or die('Unable To connect');
	$result = mysqli_query($con,"SELECT * FROM customers WHERE name='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");

	$row = mysqli_fetch_array($result);
		if(is_array($row)) {
			$_SESSION["id"] = $row['id'];
			$_SESSION["name"] = $row['name'];
		} 
		else {
			$message = "<p style = 'color:red'>Invalid username or Password!";
		}
}
if(isset($_SESSION["id"])) {
	header("Location:products.php");
}
?>
<html>
<head>
<title>member Login</title>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>
	<center>
		<form name="frmUser" method="post" action="" align="center" style = "background-color: black; width:400px;margin-top:200px; border-radius: 15px">
			
			<h3 align="center">Member Login</h3>
			<div  class="message" >

				<?php if($message!="") {

				echo $message; 

			} 

			?>
				
			</div>
			 Username:<br>
			 <input type="text" name="name" required size = "30">
			 <br>
			 Password:<br>
			<input type="password" name="password" required size = "30">
			<br><br>
			<input type="submit" name="submit" value="Login" >
			<a href = "register.php">Create Account </a><br><br>
		</form>

	</center>
	<table><tr>
				
		</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br/>
	<br/><br/><br/>
	<?php
				include("footer.php");
				?></tr></table>
</body></html>
