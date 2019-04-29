<!DOCTYPE html>
<html>
<head>
    <title>Purchase Order</title>
		<link rel="stylesheet" href="css/style.css">
</head>

<body class="align">

	<div align="center">
		<h2 style="color:ffffff;">REGISTER</h2>
	</div>
	
	<div class="grid">
		<form action="sale_register.php" method="post" class="form login">
			
			<div class="form__field">
				<input type="text" name="username" class="form_input" placeholder="Sale Person" required>
			</div>
			<div class="form__field">
				<input type="password" name="password" class="form_input" placeholder="Password" required>
			</div>
			<div class="form__field">
				<input type="submit" name="login" value="ADD">
			</div>

		</form>
    </div>
	
</body>
</html>

<?php
	
	$con = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("db_one", $con); 
	
		if(isset($_POST['login']))
		{ 
			$username = $_POST ["username"];
			$password = $_POST ["password"];
			
			$query = mysql_query("INSERT INTO user (username, password, status) VALUES ('$username', '$password', '1')");
			
				if($query)
				{
					echo "<script> alert('Register Sale Person is successful!');
							window.location.href='index.php';</script>";
				}
				else
				{
					echo "<script> alert('Register Sale Person is failed!');
							window.location.href='sale_register.php';</script>";
				}
			}
		
			mysql_close($con); 
		
?>
