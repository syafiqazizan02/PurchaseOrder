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
 
	$result = mysql_query("SELECT * FROM pro_request where res_id=".$res_id);
	
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
                        <a href="pro_pending_item.php"><i class="fa fa-fw fa-table"></i>&nbsp;&nbsp;Pending Item</i></a>
                    </li>
					<li>
                        <a href="pro_delivered_item.php"><i class="fa fa-fw fa-align-justify"></i>&nbsp;&nbsp;Delivered Item</i></a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                    </li>
                </ul>
            </div>	
        </nav>

<form action="pro_update.php" method="post" >

		<div id="page-wrapper">
		
            <div class="container-fluid">

               <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">UPDATE ITEM</h2>	
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
									<label align="center"><b>Reference Number:</b></label>
									<input type="text" class="form-control" name="dev_num" required>
								</div><br><br>
								
								<input type="hidden" name="res_id" value="<?php echo $res_id; ?>" >
								<div align="center" class="form-group">
									<button type="submit" class="btn btn-success" name="submit" value="submit">ADD</button>&nbsp;&nbsp;&nbsp;
									<a href="pro_pending_item.php"><input type="button" class="btn btn-warning" value="BACK"></a>
								</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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