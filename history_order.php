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
		
    <div id="page-wrapper">

      <div class="container-fluid">
	  
                <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">VIEW DISTRIBUTOR</h2>
						<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>&nbsp;&nbsp;Cash Order
                            </li>
                        </ol>
                    </div>
                </div><br><br>
         
                <div class="row">
					<div align="left" class="col-lg-8">
						&nbsp;&nbsp;&nbsp;<?php echo "<a href='register_order.php?username=$username'><input type='button' class='btn btn-primary btn-lg'  value='REGISTER DISTRIBUTOR'></a>" ?>
					</div>

					<div align="right" class="col-lg-4">
						<input type="text" size="20" class="form-control" placeholder="Search" name="filter" id="filter"/></br></br>            
    
						<script src="js/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
						<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
					</div>	
				</div><br>
						
				<div class="row">	
				
                    <div class="col-lg-12">
						
						<div class="table-responsive">
							
							<table class="table table-bordered table-hover">
								<tr bgcolor='#c2c2a3'>
									<th><center>Distributor</center></th>
									<th><center>Address</center></th>
									<th><center>Postcode</center></th>
									<th><center>City</center></th>
									<th><center>State</center></th>
									<th><center>Delete</center></th>
									</tr>
								</tr>
											
							<?php
					
								if(!isset($_GET['page']))
								{
									$page=1;
								}
								else if(empty($_GET['page']))
								{
									$page=1;
								}
								else if($_GET['page']<1)
								{
									$page=1;
								}
								else
								{
									$page = $_GET['page'];
								}
					
								$con = mysql_connect("localhost", "root", "");
								$db = mysql_select_db("db_one", $con); 
			
								if(isset($_POST['search']))
								{		       	
										// SEARCH
								}
								else
								{
									$sql = "SELECT * FROM company ORDER BY company_id DESC ";
								}						
					
								$result = mysql_query($sql);	
								$count1 = mysql_num_rows($result);
					
								if($count1==0)
								{
									mysql_close($con);
									echo "</table>";
									echo "<script>alert('No Result!')</script>";
								}
								else
								{
									$max_page = intval($count1 / 10);
									$remainder = $count1 % 10;
						
								if($remainder!=0)
								{
									$max_page += 1;
								}
						
								if($page>$max_page)
								{
									$page = $max_page;
								}
							
									$x = 0;
									$i = 0;

								while($row=mysql_fetch_array($result))
								{
									$x++;
									$min = ($page - 1) * 10;
									$max = $min + 11;
								
									if($x>$min && $x<$max)
									{
										$i++;
							
										if($i%2==0)
										{
											$color = "#ebebe0";
										}
										else
										{
											$color = "#f5f5f0";
										}

										echo"<tr bgcolor='$color'>";
										echo "<td align='center'>".$row['company_name']."</td>";
										echo "<td align='center'>".$row['address']."</td>";
										echo "<td align='center'>".$row['postcode']."</td>";
										echo "<td align='center'>".$row['city']."</td>";
										echo "<td align='center'>".$row['state']."</td>";
										echo "<td align='center'>
										<a href='delete_company.php?username=$username&&company_id=".($row["company_id"])."'>
													<button type='submit' name='delete' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button</a></td>";
									}
								}
								echo "</table>";
			
								mysql_close($con);
								
							?>
							
							<center>
								<?php
									if($page>1)
									{
								?>
										<a href="history_order.php?username=<?php echo "$username"?>&&page=<?php echo $page-1; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;">&nbsp;&nbsp;&nbsp;Prev&nbsp;&nbsp;&nbsp;</button></a>
								<?php
									}
								?>
								<?php
									if($page>2)
									{
								?>
									<a href="history_order.php?username=<?php echo "$username"?>&&page=<?php echo $page-2; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page-2; ?></button></a>
								<?php
									}
									
									if($page>1)
									{
								?>
									<a href="history_order.php?username=<?php echo "$username"?>&&page=<?php echo $page-1; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page-1; ?></button></a>
								<?php
									}
									if($max_page!=1){
								?>
									<a href="history_order.php?username=<?php echo "$username"?>&&page=<?php echo $page; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page; ?></button></a>
								<?php
									}
									
									$p1 = $page + 1;
									if($p1<=$max_page)
									{
								?>
									<a href="history_order.php?username=<?php echo "$username"?>&&page=<?php echo $page+1; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page+1; ?></button></a>
								<?php
									}
									
									$p2 = $page + 2;
									if($p2<=$max_page)
									{
								?>
									<a href="history_order.php?username=<?php echo "$username"?>&&page=<?php echo $page+2; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page+2; ?></button></a>
								<?php
									}
									
									if($page<$max_page)
									{
								?>
										<a href="history_order.php?username=<?php echo "$username"?>&&page=<?php echo $page+1; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;">&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;</button></a>
								<?php
									}
								}
								?>
							</center>
					
							</div>
						</div>
                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
	
	<script src="js/jquery.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

</body>
</html>