<!DOCTYPE html>
<html>
<head>

	<title>COMMANDING</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>
	<a href="products.php" style="color: red;">Back</a>
	<form method="POST" action="insert_comm.php" align="center"  style="background-color: gray; width:500px; margin-top: 100px; border-radius:10px; margin-left: 200px;  margin-right: 400px;">
		<h3 align="center">Commanding form</h3>
     nationalID:<br/>
	<input type="number only" name="nationalID" required size="30" style="color: blue;">
	<br/>
	First name:<br/>
	<input type="text only" name="firstName" required size="30" style="color: blue;">
	<br/>
	Last name:<br/>
	<input type="text only" name="lastName" required size="30" style="color: blue;">
	<br/>
	Telephone:<br/>
	<input type="number only" name="telephone" required size="30" style="color: blue;">
	<br/>
	Quantity:<br/>
	<input type="number/text" name="quantity" required size="30" style="color: blue;">
	<br/><br/>
	<input type="submit" name="submit" value="OHEREZA">

	</form>


</body>
</html>