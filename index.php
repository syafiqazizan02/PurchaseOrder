<!DOCTYPE html>
<html>
<head>
    <title>Purchase Order</title>
		<link rel="stylesheet" href="css/style.css">
</head>

<body class="align">

	<div align="center">
		<h1>Online Purchasing System</h1>
	</div>
	
	<div class="grid">
		<form action="index.php" method="post" class="form login">
			
			<div class="form__field">
				<input type="text" name="username" class="form_input" placeholder="Username" required>
			</div>
			<div class="form__field">
				<input type="password" name="password" class="form_input" placeholder="Password" required>
			</div>
			<div class="form__field">
				<input type="submit" name="login" value="LOGIN">
			</div>
			
	<div align="center">
		<a  href="sale_register.php"><img src="image/logo.png" width="300px" height="100px"></a>
	</div>

		</form>
    </div>
	
</body>
</html>


<?php
	
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		if($username!=''&& $password!='')
		{
			include('db_connect.php');
			
			$query=mysql_query("select * from admin where username='$username' and password='$password'");
			$res=mysql_fetch_row($query);
			
			if($res)
			{
				$_SESSION['loggedin'] = true;
				$_SESSION['user']="admin";
				$_SESSION['username']=$username;
				
				mysql_close($con);
				
				echo "<script>window.location.href='admin/sale_home.php';</script>";
			}
			else
			{
				include('db_connect.php');
				
				$query=mysql_query("select * from staff_one where username='$username' and password='$password'");
				$res=mysql_fetch_row($query);
			
				if($res)
				{	
					$_SESSION['loggedin'] = true;
					$_SESSION['user']="staff_one";
					$_SESSION['username']=$username;

					mysql_close($con);
					
					echo "<script>window.location.href='staff_one/sale_home.php';</script>";
					
				}
				else
				{
					include('db_connect.php');
					
					$query=mysql_query("select * from staff_two where username='$username' and password='$password'");
					$res=mysql_fetch_row($query);
			
					if($res)
					{	
						$_SESSION['loggedin'] = true;
						$_SESSION['user']="staff_two";
						$_SESSION['username']=$username;

						mysql_close($con);
						
						echo "<script>window.location.href='staff_two/sale_home.php';</script>";
					
					}
					else
					{
						include('db_connect.php');
					
						$query=mysql_query("select * from staff_three where username='$username' and password='$password'");
						$res=mysql_fetch_row($query);
			
						if($res)
						{	
							$_SESSION['loggedin'] = true;
							$_SESSION['user']="staff_three";
							$_SESSION['username']=$username;

							mysql_close($con);
						
							echo "<script>window.location.href='staff_three/users.php';</script>";
						}
						else
						{
							include('db_connect.php');
					
							$query=mysql_query("select * from user where username='$username' and password='$password'");
							$res=mysql_fetch_row($query);
			
							if($res)
							{	
								$_SESSION['loggedin'] = true;
								$_SESSION['user']="user";
								$_SESSION['username']=$username;

								mysql_close($con);
						
								echo "<script>window.location.href='sale_home.php?username=$username';</script>";
							}
							else
							{
								mysql_close($con);
								echo "<script>alert('Your Email or Password is Incorrect!')</script>";
							}
						}
					}
				}
			}
		}
		else
		{
			echo "<script>alert('Please enter your Email and Password!')</script>";
		}
	}
?>