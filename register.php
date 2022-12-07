<?php
include("upper.php");
?>
<html>
<head>
<title>member create account</title>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>
	<center>
		<form name="frmUser" method="POST" action="save_nu_mb.php" align="center" style = "background-color: black; width:400px;margin-top:200px; border-radius: 15px">

			<h3 align="center"> New Account</h3>
			 Username:<br>
			 <input type="text" name="name" required size = "30" required>
			 <br>
			 Password:<br>
			<input type="password" name="password" required size = "30" required>
			 <br>
			 Comfirm Password:<br>
			<input type="password" name="password" required size = "30" required>
			<br><br>
			<input type="submit" value="Register">
		</form>

	</center>
		</body>
</html>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br/>
	<br/><br/><br/>

</body>
</html>
<?php
include("footer.php");
?>