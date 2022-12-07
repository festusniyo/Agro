<?php
$product_name=$_POST['product_name'];
$cost=$_POST['cost'];
$quantity=$_POST['quantity'];
$con=mysqli_connect('localhost','root','','stock') or die("enable to connect");
$ins="INSERT INTO all_product(`product_name`,`cost`,`quantity`) VALUES('$product_name','$cost','$quantity')" or die("error");
$result=mysqli_query($con,$ins);
if ($result) {
	?>
<script >
	window.alert("new product has inserted successfuly");
	window.location.href='pro_form.php';
</script>
<?php
}
?>