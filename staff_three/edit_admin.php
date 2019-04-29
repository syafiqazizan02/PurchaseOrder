<?php
	session_start();
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{
		$user = $_SESSION['user'];
		
		if($user=="user")
		{
			header('location:view_order.php');
		}
	}
?>

<?php
	include "db_connect.php";

	$id = $_REQUEST['id'];
 
	$result = mysql_query("SELECT * FROM admin where id=".$id);
	
	while($row=mysql_fetch_array($result))
	{
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PurchaseOrder</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
</head>

<body>

	<div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="users.php">Purchase Order</a>
            </div>
			
              <div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li>
						<a href='users.php'><i class='fa fa-fw fa-th-large'></i>&nbsp;&nbsp;Sale Person</a>
					</li>
					<li>
						<a href='admin.php'><i class='fa fa-fw fa-list-alt'></i>&nbsp;&nbsp;Admin Person</a>
					</li>
					<li>
						<a href='receiver.php'><i class='fa fa-fw fa-table'></i>&nbsp;&nbsp;Receiver Person</i></a>
					</li>
					<li>
						<a href='account.php'><i class='fa fa-fw fa-align-justify'></i>&nbsp;&nbsp;Account Person</i></a>
					</li>
					<li>
						<a href='logout.php'><i class='fa fa-fw fa-power-off'></i>&nbsp;&nbsp;Logout</a>
					</li>
                </ul>
            </div>	
        </nav>

<form action="update_admin.php" method="post" >

		<div id="page-wrapper">
		
            <div class="container-fluid">

               <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">UPDATE ADMIN</h2>	
					</div>
                </div><br><br>
				
				<div class="row">
					<div class="col-lg-12">
					
							<div  align="left" class="col-lg-3">
							</div>
						
							<div class="col-lg-6">
							
								<center><b>Users Information:</b></center>
								<div class="form-group">
									<label align="center"><b>Username:</b></label>
									<input type="text" class="form-control" name="username" value="<?php echo $row['username']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>Password:</b></label>
									<input type="text" class="form-control" name="password" value="<?php echo $row['password']?>" required>
								</div><br>
								<input type="hidden" name="id" value="<?php echo $id; ?>" >
								<div align="center" class="form-group">
									<button type="submit" class="btn btn-success" name="submit" value="submit">UPDATE</button>&nbsp;&nbsp;&nbsp;
									<a href="users.php"><input type="button" class="btn btn-warning" value="BACK"></a>
								</div><br><br><br><br><br><br><br><br><br><br>
							</div>		
					</div>
				</div>
            
			</div>
        </div>
    </div>
	
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</form>
	<?php } ?>
</body>
</html>