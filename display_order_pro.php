<?php
	session_start();
	
	$username = $_GET ["username"];
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{
		$user = $_SESSION['user'];
		
		if($user=="admin")
		{
			header('location:admin/view_order.php?');
		}
	}
?>

<?php
	include "db_connect.php";

	$client_id = $_REQUEST['client_id'];
 
	$result = mysql_query("SELECT * FROM clients where client_id=".$client_id);
	
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

<script src="jquery.js"></script>	
<script type="text/javascript">
			$(document).ready(function() 
			{
				$('#company').on('change',function()
				{	
					var companyID = $(this).val();
					if(companyID)
					{		
						$.ajax(
						{
							type:'POST',
							url:'ajaxCompany.php',
							data:'company_id='+companyID,                
						}); 
					}		
				}
			});
</script>

<script src="js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function()
	{
        $("#companyID").on('change',function()
        {
            var keyword = $(this).val();
            $.ajax(
            {
                url:'fetch.php',
                type:'POST',
                data:'request='+keyword,
                
                beforeSend:function()
                {
                    $("#af").html('Working...');     
                },
                success:function(data)
                {
                    $("#af").html(data);
                },
            });
        });
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

<form action="add_order.php" method="post" >

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
								<div class='form-group'>
									<label align="center"><b>End User:</b></label>
									<input type="text" class="form-control" name="client_name" value="<?php echo $row['client_name']?>" readonly>
								</div>
								<div class='form-group'>
									<label align="center"><b>*End User PIC:</b></label>
									<input type="text" placeholder="Enter Person Incharge" class="form-control" name="client_pic" required>
								</div>
								<div class='form-group'>
									<label align="center"><b>*End User Email: ex example@email.com</b></label>
									<input type="text" placeholder="Enter Email" class="form-control" name="client_email" required>
								</div>
								<div class='form-group'>
									<label align="center"><b>*End User Phone Number : ex 00-000000</b></label>
									<input type="text" placeholder="Enter Phone Number" class="form-control" name="client_number" required>
								</div><br>
								
								<?php
								
								include('dbConfig.php');

										$query = $db->query("SELECT * FROM company WHERE status = 1 ORDER BY company_name ASC");

										$rowCount = $query->num_rows;
							
								echo "<center><b>Distributor Information:</b></center>";
								echo "<div class='form-group'>
										<label align='center'><b><p>*Distributor:</p></b></label>
										<select class='form-control' name='company_name' id='companyID' required>	
											<option value=''>Select Company</option>";

												if($rowCount > 0)
												{
													while($row = $query->fetch_assoc())
													{ 
														echo '<option value="'.$row['company_name'].'">'.$row['company_name'].'</option>';
													}
												}
												else
												{
													echo '<option value="">End User Not Available</option>';
												}
												
								echo "	</select>	   
									  </div>";
									  
								?>
								<div id="af">

								</div>
								<div class='form-group'>
									<label align="center"><b>*Distributor  PIC:</b></label>
									<input type="text" placeholder="Enter Person Incharge" class="form-control" name="company_pic" required>
								</div>
								<div class='form-group'>
									<label align="center"><b>*Distributor  Email:</b></label>
									<input type="text" placeholder="Enter Email" class="form-control" name="company_email" required>
								</div><br>

								<center><b>Purchase Order Information:</b></center>	
								<div class='form-group'>
									<label align="center"><b>*Request Date:</b></label>
									<input type="date" placeholder="Enter Request Date" class="form-control" name="redate" required>
								</div><br>
								<div align="center" class="form-group">
									<?php echo "<input type='hidden'  name='username' value='$username' >"; ?>
									<button type="submit" class="btn btn-success" name="submit" value="submit">ADD</button>&nbsp;&nbsp;&nbsp;
									<?php echo "<a href='history_order_pro.php?username=$username'><input type='button' class='btn btn-warning' value='BACK'></a>"; ?>
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
	
</body>
</html>

<?php } ?>