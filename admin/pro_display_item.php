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
	include 'db_connect.php';

	$res_id= @$_REQUEST['res_id'];

	$result = mysql_query("SELECT * FROM pro_request where res_id=".$res_id);

	while($row=@mysql_fetch_array($result))
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
	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function() 
			{
				$('#sale').on('change',function()
				{	
					var saleID = $(this).val();
					if(saleID)
					{		
						$.ajax(
						{
							type:'POST',
							url:'ajaxSale.php',
							data:'user_id='+clientID,                
						}); 
					}		
				}
			});
	</script>
	
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
                        <a href="pro_view_order.php"><i class="fa fa-fw fa-table"></i>&nbsp;&nbsp;Request Order</i></a>
                    </li>
					<li>
                        <a href="pro_status_order.php"><i class="fa fa-fw fa-align-justify"></i>&nbsp;&nbsp;Success Order</i></a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                    </li>
                </ul>
            </div>	
        </nav>
		
		
		
<form action="pro_add_item.php" method="post">


 <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">ADD ORDER</h2>
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
                               <input type="hidden" value="<?php echo $row['username']?>" name="username">
								<input type="hidden" value="<?php echo $row['res_id']?>" name="res_id">
								<input type="hidden" value="<?php echo $row['client_name']?>" name="client_name">
								<input type="hidden" value="<?php echo $row['company_name']?>" name="company name">
								<input type="hidden" value="<?php echo $row['redate']?>" name="redate">
							</div>
							<div class="form-group">
                               <label align="center"><b>*Product Code:</b></label>
                               <input type="text" placeholder="Enter Product" class="form-control" name="product" required>
							</div>
							<div class="form-group">
                               <label align="center"><b>*Model:</b></label>
                               <input type="text" placeholder="Enter Model" class="form-control"  name="model" required>
							</div>
							<div class="form-group">
                               <label align="center"><b>SKU No. :</b></label>
                               <input type="text" placeholder="Enter Description" class="form-control" name="description">
							</div>
							<div class="form-group">
                               <label align="center"><b>Shipping:</b></label>
                               <input type="text" placeholder="Enter Shipping" class="form-control" name="shipping">
							</div>
							<div class="form-group">
                               <label align="center"><b>*Cost Price (RM):</b></label>
                             <input type="text" placeholder="Enter Cost Price" class="form-control" name="price" required>
							</div>	
							<div class="form-group">
                                <label align="center"><b>*Quantity:</b></label>
								<input type="text" placeholder="Enter Quantity" class="form-control" name="quantity" required>
							</div>
							<div class="form-group">
                                <label align="center"><b>ETA:</b></label>
								<input type="text" placeholder="Enter ETA" class="form-control" name="eta">
							</div>
							<div class="form-group">
                                <label align="center"><b>Remark:</b></label>
								<input type="text" placeholder="Enter Remark" class="form-control" name="remark">
							</div>
							<div  align="center" class="form-group">
								<button type="submit" class="btn btn-success" name="submit" value="submit">ADD</button>
								<?php echo "<a href='pro_view_item.php?res_id=$res_id'><input type='button' class='btn btn-warning' value='BACK'></a>";?>
							</div>
						</div>
				</div>
			 </div>	
		
		</div>
	</div>
</form>	
</div>
<?php } ?>
</body>
</html>
