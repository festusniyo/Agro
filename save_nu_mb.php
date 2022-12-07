<?php
		$name = $_POST['name'];
		$password = $_POST['password'];

		$con = mysqli_connect("localhost", "root", "", "stock") or die ("connection to db error");
		$ins_query = "INSERT INTO customers (`name`, `password`) VALUES ('$name', '$password')";
		$ex_ins_q = mysqli_query($con, $ins_query) or die ("Query error");

		if ($ex_ins_q){
				        ?>
					<script>
							window.alert("New User Account has Registered Successfully");
							window.location.href='login.php';
							
					</script>
						<?php
					}
?>