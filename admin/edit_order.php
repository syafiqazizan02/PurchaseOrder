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

	$res_id = $_REQUEST['res_id'];
 
	$result = mysql_query("SELECT * FROM request where res_id=".$res_id);
	
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
                <a class="navbar-brand" href="sale_home.php">Purchase Order</a>
            </div>
			
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="view_order.php"><i class="fa fa-fw fa-table"></i>&nbsp;&nbsp;Request Order</i></a>
                    </li>
					<li>
                        <a href="status_order.php"><i class="fa fa-fw fa-align-justify"></i>&nbsp;&nbsp;Success Order</i></a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                    </li>
                </ul>
            </div>	
        </nav>

<form action="update_order.php" method="post" >

		<div id="page-wrapper">
		
            <div class="container-fluid">

               <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">UPDATE ORDER</h2>	
						<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>&nbsp;&nbsp;Cash Order
                            </li>
                        </ol>
                    </div>
                </div><br><br>
				
				<div class="row">
					<div class="col-lg-12">
					
							<div  align="left" class="col-lg-3">
							</div>
						
							<div class="col-lg-6">
							
								<center><b>End User Information:</b></center>
								<div class="form-group">
									<label align="center"><b>End User:</b></label>
									<input type="text" class="form-control" name="client_name" value="<?php echo $row['client_name']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>End User PIC:</b></label>
									<input type="text" class="form-control" name="client_pic" value="<?php echo $row['client_pic']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>End User Email:</b></label>
									<input type="text" class="form-control" name="client_email" value="<?php echo $row['client_email']?>" required>
								</div><br><br>
								
								<center><b>Distributor Information:</b></center>
								<div class="form-group">
									<label align="center"><b>Distributor:</b></label>
									<input type="text" class="form-control" name="company_name" value="<?php echo $row['company_name']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>Distributor PIC:</b></label>
									<input type="text" class="form-control" name="company_pic" value="<?php echo $row['company_pic']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>Distributor Email:</b></label>
									<input type="text" class="form-control" name="company_email" value="<?php echo $row['company_email']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>Address:</b></label>
									<input type="text" class="form-control" name="address" value="<?php echo $row['address']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>Postcode:</b></label>
									<input type="text" class="form-control" name="postcode" value="<?php echo $row['postcode']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>City:</b></label>
									<input type="text" class="form-control" name="city" value="<?php echo $row['city']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>State:</b></label>
									<input type="text" class="form-control" name="state" value="<?php echo $row['state']?>" required>
								</div><br>

								<center><b>Purchase Order Information:</b></center>
								<div class="form-group">
									<label align="center"><b>*Purchase Order No. :</b></label>
									<input type="text" class="form-control" name="po_no" value="<?php echo $row['po_no']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>Request Date:</b></label>
									<input type="date" class="form-control" name="redate" value="<?php echo $row['redate']?>" readonly>
								</div>
								<div class="form-group">
									<label align="center"><b>*Process Date:</b></label>
									<input type="date" class="form-control" name="prodate" value="<?php echo $row['prodate']?>" required>
								</div>
								
								<br><br>
			
								<center><b>Company Information:</b></center>
								<div class="form-group">
									<label align="center"><b>*ATTN:</b></label>
									<input type="text" class="form-control" name="attn" value="<?php echo $row['attn']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>*Deliver To:</b></label>
									<input type="text" class="form-control" name="branch" value="<?php echo $row['branch']?>" required>
								</div>
								<div class="form-group">
									<label align="center"><b>*Deliver Address:</b></label>
									<input type="text" class="form-control" name="branch_address" value="<?php echo $row['branch_address']?>" required>
								</div><br><br>
								
								<input type="hidden" name="res_id" value="<?php echo $res_id; ?>" >
								<div align="center" class="form-group">
									<button type="submit" class="btn btn-success" name="submit" value="submit">ADD</button>&nbsp;&nbsp;&nbsp;
									<a href="view_order.php"><input type="button" class="btn btn-warning" value="BACK"></a>
								</div>
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