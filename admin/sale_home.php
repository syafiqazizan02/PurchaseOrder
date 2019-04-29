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
                <?php echo "<a class='navbar-brand' href='sale_home.php'>Purchase Order</a>"; ?>
            </div>
			
            <div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
				<?php 
					echo "	<li>
								<a href='view_order.php'><i class='fa fa-fw fa-comments'></i>&nbsp;&nbsp;Cash Order</a>
							</li>
							<li>
								<a href='pro_view_order.php'><i class='fa fa-fw fa-tasks '></i>&nbsp;&nbsp;Procurement</a>
							</li>
							<li>
								<a href='new_view_order.php'><i class='fa fa-fw fa-life-ring'></i>&nbsp;&nbsp;Project</a>
							</li>
							<li>
								<a href='logout.php'><i class='fa fa-fw fa-power-off'></i>&nbsp;&nbsp;Logout</a>
							</li>";
				?>
                </ul>
            </div>	
        </nav>
		
    <div id="page-wrapper">

      <div class="container-fluid">
	  
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo "<h2 align='center' class='page-header'>Welcome!</h2>"; ?>
						<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>&nbsp;&nbsp;Purchase Order
                            </li>
                        </ol>
                    </div>
                </div><br><br><br>
         
				<div class="row">
					<div class="col-lg-2">
                    </div>
					
					<div class="col-lg-10">
						<div class="col-lg-3 col-md-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-comments fa-5x"></i>
										</div>
										<div class="col-xs-9 text-right">
											<div class="huge"></div>
											<div>CASH ORDER</div>
										</div>
									</div>
								</div>
								<?php echo"<a href='view_order.php'>";?>
									<div class="panel-footer">
										<span class="pull-left">View Details</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6">
							<div class="panel panel-green">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-tasks fa-5x"></i>
										</div>
										<div class="col-xs-9 text-right">
											<div class="huge"></div>
											<div>PROCUREMENT</div>
										</div>
									</div>
								</div>
								<?php echo"<a href='pro_view_order.php'>";?>
									<div class="panel-footer">
										<span class="pull-left">View Details</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6">
							<div class="panel panel-yellow">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-life-ring fa-5x"></i>
										</div>
										<div class="col-xs-9 text-right">
											<div class="huge"></div>
											<div>PROJECT</div>
										</div>
									</div>
								</div>
								<?php echo"<a href='new_view_order.php'>";?>
									<div class="panel-footer">
										<span class="pull-left">View Details</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
					</div>
                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
	
	<script src="js/jquery.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
