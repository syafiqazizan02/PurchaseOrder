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

	$result = mysql_query("SELECT * FROM request where res_id=".$res_id);

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
                        <a href="pending_item.php"><i class="fa fa-fw fa-table"></i>&nbsp;&nbsp;Pending Item</i></a>
                    </li>
					<li>
                        <a href="delivered_item.php"><i class="fa fa-fw fa-align-justify"></i>&nbsp;&nbsp;Delivered Item</i></a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                    </li> 
                </ul>
            </div>	
        </nav>

	<div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">VIEW ITEM</h2>
						<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>&nbsp;&nbsp;Cash Order
                            </li>
                        </ol>
                    </div>
                </div><br><br>
				
				<div class="row">
				
					<div align="left" class="col-lg-8">
					</div>
					
					<div>
						<table>
							<tr>
								<td><label><b>Sale Peson:&nbsp;&nbsp;</b></label></td>
								<td><label><?php echo $row['username']?></label></td>
							</tr>
							<tr>
								<td><label></label></td>
								<td><label></label></td>
							</tr>
							<tr>
								<td><label><b>End User:&nbsp;&nbsp;</b></label></td>
								<td><label><?php echo $row['client_name']?></label></td>
							</tr>
							<tr>
								<td><label><b>PIC:&nbsp;&nbsp;</b></label></td>
								<td><label><?php echo $row['client_pic']?></label></td>
							</tr>
							<tr>
								<td><label><b>Email:&nbsp;&nbsp;</b></label></td>
								<td><label><?php echo $row['client_email']?></label></td>
							</tr>
							<tr>
								<td><label><b>Phone:&nbsp;&nbsp;</b></label></td>
								<td><label><?php echo $row['client_number']?></label></td>
							</tr>
							<tr>
								<td><label></label></td>
								<td><label></label></td>
							</tr>
							<tr>
								<td><label></label></td>
								<td><label></label></td>
							</tr>
							<tr>
								<td><label><b>Distributor:&nbsp;&nbsp;</b></label></td>
								<td ><label><?php echo $row['company_name']?></label></td>
							</tr>
							<tr>
								<td><label></label></td>
								<td><label><?php echo $row['address']?>,<br><?php echo $row['postcode']?>,&nbsp;&nbsp;<?php echo $row['city']?>,<br><?php echo $row['state']?>.</label></td>
							</tr>
							<tr>
								<td><label><b>PIC:&nbsp;&nbsp;</b></label></td>
								<td ><label><?php echo $row['company_pic']?></label></td>
							</tr>
							<tr>
								<td><label><b>Email:&nbsp;&nbsp;</b></label></td>
								<td ><label><?php echo $row['company_email']?></label></td>
							</tr>
							<tr>
								<td><label></label></td>
								<td><label></label></td>
							</tr>
							<tr>
								<td><label><b>Request Date:&nbsp;&nbsp;</b></label></td>
								<td ><label><?php echo date_format(date_create($row['redate']), 'd/m/y')?></label></td>
							</tr>
							<tr>
								<td><label></label></td>
								<td><label></label></td>
							</tr>
						</table>
					</div>
				</div><br><br>
	
	
				<div class="row">
					
					<div class="col-lg-12">
						
						<div class="table-responsive">
							
							<table class="table table-bordered table-hover">				
								<tr bgcolor='#c2c2a3'>
									<th><center>Product Code</center></th>
									<th><center>Model</center></th>
									<th><center>Cost Price</center></th>
									<th><center>Quantity</center></th>							
									<th><center>Amount</center></th>
									<th><center>Gst</center></th>
									<th><center>Total Amount</center></th>
								</tr>
							
						<?php
		
							$con = mysql_connect("localhost", "root", "");
							$db = mysql_select_db("db_one", $con); 

							$a= $_REQUEST['res_id'];
					
							$result = mysql_query("SELECT * from item WHERE res_id='$a' ");

							$t_amount = 0;
							$t_gst =0;
					
							while($row=mysql_fetch_array($result))
							{
								echo"<tr bgcolor='#f5f5f0' height='30'>";
								echo "<td align=center>".$row['product']."</td>";
								echo "<td align=center>".$row['model']."</td>";
								echo "<td align=center>RM&nbsp;&nbsp;".$row['price']."</td>";
								echo "<td align=center>".$row['quantity']."</td>"; 
								echo "<td align=center>RM&nbsp;&nbsp;".$row['amount']."</td>";
								echo "<td align=center>RM&nbsp;&nbsp;".$row['gst']."</td>";
								echo "<td align=center bgcolor='#ebebe0'>RM&nbsp;&nbsp;".$row['t_amount']."</td>";
						
								$amount= $row['amount'];
						
								$gst= $row['gst'];
						
								$t_amount += $amount;
						
								$t_gst += $gst;
						
							}
					
							$t_amount = sprintf('%0.2f',$t_amount);

							$subtotal = $t_amount;
					
							$t_gst = sprintf('%0.2f',$t_gst);
					
							$subgst = $t_gst;
					
							$total =  ($subtotal + $subgst);
					
							echo "<tr bgcolor='#c2c2a3' height='70'>
									<td align='right'colspan='6'><b>Total&nbsp; Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td align=center colspan='2'><b>RM&nbsp;&nbsp;";echo number_format($total, 2);echo" </b></td>
								  </tr>
					
							</table>";
					
							$insert_pro=mysql_query("UPDATE request SET total='$total' where res_id='$a'");
							
							mysql_close($con);	
						
						?>
					
					</div>
				</div>
			</div><br><br><br><br><br><br><br><br><br><br><br>
<?php
}
?>

		</div>
	</div>
</div>
</body>
</html>