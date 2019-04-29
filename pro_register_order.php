<?php
	session_start();
	
	$username = $_GET ["username"];
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{
		$user = $_SESSION['user'];
		
		if($user=="admin")
		{
			header('location:admin/view_order.php');
		}
	}
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
                <?php echo "<a class='navbar-brand' href='sale_home.php?username=$username'>Purchase Order</a>"; ?>
            </div>
			
            <div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					 <?php 
					echo "	<li>
								<a href='pro_register_order_pro.php?username=$username'><i class='fa fa-fw fa-share-square'></i>&nbsp;&nbsp;Register End User</a>
							</li>
							<li>
								<a href='pro_history_order_pro.php?username=$username'><i class='fa fa-fw fa-th-large'></i>&nbsp;&nbsp;View End User</a>
							</li>
							<li>
								<a href='pro_register_order.php?username=$username'><i class='fa fa-fw fa-sign-in'></i>&nbsp;&nbsp;Register Distributor</a>
							</li>
							<li>
								<a href='pro_history_order.php?username=$username'><i class='fa fa-fw fa-list-alt'></i>&nbsp;&nbsp;View Distributor</a>
							</li>
							<li>
								<a href='pro_display_order.php?username=$username'><i class='fa fa-fw fa-edit'></i>&nbsp;&nbsp;New Order</a>
							</li>
							<li>
								<a href='pro_view_order.php?username=$username'><i class='fa fa-fw fa-table'></i>&nbsp;&nbsp;Request Order</i></a>
							</li>
							<li>
								<a href='pro_status_order.php?username=$username'><i class='fa fa-fw fa-align-justify'></i>&nbsp;&nbsp;Success Order</i></a>
							</li>
							<li>
								<a href='logout.php'><i class='fa fa-fw fa-power-off'></i>&nbsp;&nbsp;Logout</a>
							</li>";
				?>
                </ul>
            </div>	
        </nav>

<form action="pro_add_company.php" method="post" >

		<div id="page-wrapper">
		
            <div class="container-fluid">

               <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">REGISTER DISTRIBUTOR</h2>	
						<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>&nbsp;&nbsp;Procurement 
                            </li>
                        </ol>
                    </div>
                </div><br><br>
				
				<div class="row">
					<div class="col-lg-12">
					
							<div  align="left" class="col-lg-3">
							</div>
					
							<div class="col-lg-6">
								<div class="form-group">
									<?php echo "<input type='hidden'  name='username' value='$username' >"; ?>
									<label align="center"><b>Distributor:</b></label>
									<input type="text" placeholder="Enter Supplier" class="form-control" name="company_name" required>
								</div>
								<div class="form-group">
									<label align="center"><b>Address:</b></label>
									<input type="text" placeholder="Enter Address" class="form-control" name="address" required>
								</div>
								<div class="form-group">
									<label align="center"><b>Postcode:</b></label>
									<input type="text" placeholder="Enter Postcode" class="form-control" name="postcode" required>
								</div>
								<div class="form-group">
									<label align="center"><b>City:</b></label>
									<input type="text" placeholder="Enter City" class="form-control" name="city" required>
								</div>
								<div class="form-group">
									<label align="center"><b>State:</b></label>
									<input type="text" placeholder="Enter State" class="form-control" name="state" required>
								</div>	
								<div align="center" class="form-group">
									<button type="submit" class="btn btn-success" name="submit" value="submit">ADD</button>&nbsp;&nbsp;&nbsp;
									<?php echo "<a href='pro_history_order.php?username=$username'><input type='button' class='btn btn-warning' value='BACK'></a>"; ?>
								</div><br><br><br><br><br><br><br><br><br><br><br><br><br>
							</div>			
					</div>
				</div>
				
			</div>
        </div>
    </div>
	
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</form>

</body>
</html>
