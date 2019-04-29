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
<?php
	include "db_connect.php";

	$id = $_REQUEST['id'];
 
	$result = mysql_query("SELECT * FROM item where item_id=".$id);
	
	while($row=mysql_fetch_array($result))
	{
		
		$res_id = $row['res_id'];
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
								<a href='register_order_pro.php?username=$username'><i class='fa fa-fw fa-share-square'></i>&nbsp;&nbsp;Register End User</a>
							</li>
							<li>
								<a href='history_order_pro.php?username=$username'><i class='fa fa-fw fa-th-large'></i>&nbsp;&nbsp;View End User</a>
							</li>
							<li>
								<a href='register_order.php?username=$username'><i class='fa fa-fw fa-sign-in'></i>&nbsp;&nbsp;Register Distributor</a>
							</li>
							<li>
								<a href='history_order.php?username=$username'><i class='fa fa-fw fa-list-alt'></i>&nbsp;&nbsp;View Distributor</a>
							</li>
							<li>
								<a href='display_order.php?username=$username'><i class='fa fa-fw fa-edit'></i>&nbsp;&nbsp;New Order</a>
							</li>
							<li>
								<a href='view_order.php?username=$username'><i class='fa fa-fw fa-table'></i>&nbsp;&nbsp;Request Order</i></a>
							</li>
							<li>
								<a href='status_order.php?username=$username'><i class='fa fa-fw fa-align-justify'></i>&nbsp;&nbsp;Success Order</i></a>
							</li>
							<li>
								<a href='logout.php'><i class='fa fa-fw fa-power-off'></i>&nbsp;&nbsp;Logout</a>
							</li>";
				?>
                </ul>
            </div>	
        </nav>

<form action="update_item.php" method="post" >

	<div id="page-wrapper">
		
        <div class="container-fluid">
		
				<div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">NEW ORDER</h2>	
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
						<div class="form-group">
								<label align="center"><b>Product Code:</b></label>
								<input type="text" class="form-control" name="product" value="<?php echo $row['product']?>" required>
							</div>
							<div class="form-group">
								<label align="center"><b>Model:</b></label>
								<input type="text" class="form-control" name="model" value="<?php echo $row['model']?>" required>
							</div>
							<div class="form-group">
								<label align="center"><b>SKU No. :</b></label>
								<input type="text" class="form-control" name="description" value="<?php echo $row['description']?>">
							</div>
							<div class="form-group">
								<label align="center"><b>Cost Price:</b></label>
								<input type="text" class="form-control" name="price" value="<?php echo $row['price']?>" required>
							</div>
							<div class="form-group">
								<label align="center"><b>Quantity:</b></label>
								<input type="text" class="form-control" name="quantity" value="<?php echo $row['quantity']?>" required>
							</div>
							
							<input type="hidden" name="id" value="<?php echo $id; ?>" >
							<input type="hidden" name="res_id" value="<?php echo $res_id; ?>" >
							<input type="hidden" name="username" value="<?php echo $username; ?>" >
							
							<div align="center" class="form-group">
								<input type="submit" class="btn btn-success" name="submit" value="UPDATE">
								<?php echo "<a href='view_item.php?username=$username&&res_id=$res_id'><input type='button' class='btn btn-warning' value='BACK'></a>";?>
							</div>
	
						</div>
				</div>
			</div><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
		</div>
	</div>
</form>
</div>
</body>
</html>
<?php } ?>
	