<?php
$nationalID=$_POST['nationalID'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$telephone=$_POST['telephone'];
$quantity=$_POST['quantity'];

$con=mysqli_connect("localhost","root","","stock") or die("enable to connect");

$insert="INSERT INTO commands(`nationalID`,`firstName`,`lastName`,`telephone`,`quantity`) VALUES('$nationalID','$firstName','$lastName','$telephone','$quantity')" or die("query error");

$result=mysqli_query($con,$insert);
if ($result) {
	?>
	<script type="text/javascript">
		window.alert("the commands has been successful")
		window.location.href="command_form.php"
	</script>
	<?php
}
?>