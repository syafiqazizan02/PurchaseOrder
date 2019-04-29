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
		
    <div id="page-wrapper">

      <div class="container-fluid">
	  
                <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="page-header">RECEIVER PERSON</h2>
                    </div>
                </div><br><br>
				
                <div class="row">
					<div align="left" class="col-lg-8">
					</div>
					
					<div align="right" class="col-lg-4">
						<input type="text" size="20" class="form-control" placeholder="Search" name="filter" value="" id="filter"/></br></br>            
    
						<script src="js/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
						<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
							
					</div>	
				</div><br>
						
				<div class="row">	
				
                    <div class="col-lg-12">
						
						<div class="table-responsive">
							
							<table class="table table-bordered table-hover">
								<tr bgcolor='#c2c2a3'>
									<th width="40"><center>Username</center></th>
									<th width="40"><center>Password</center></th>
									<th  width="20"><center>Action</center></th>
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
								
								include('db_connect.php');
		
								if(isset($_POST['search']))
								{		  
									//SEARCH
								}
								else
								{
									$sql = "SELECT * FROM staff_one ORDER BY id DESC";
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
					
												echo"<tr bgcolor='$color' height='40'>";
												echo "<td align='center'>".$row['username']."</td>";
												echo "<td align='center'>".$row['password']."</td>";
							
												echo "<td align='center'>
														<a href='edit_receiver.php?id=".$row['id']."'>
															<button type='submit'  name='edit' class='btn btn-success btn-xs'><span class='glyphicon glyphicon-edit'></span></button></a>
														<a href='delete_receiver.php?id=".$row['id']."'>
															<button type='submit' name='delete' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button></a></td>";								
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
										<a href="receiver.php?page=<?php echo $page-1; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;">&nbsp;&nbsp;&nbsp;Prev&nbsp;&nbsp;&nbsp;</button></a>
								<?php
									}
								?>
								<?php
									if($page>2)
									{
								?>
									<a href="receiver.php?page=<?php echo $page-2; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page-2; ?></button></a>
								<?php
									}
									
									if($page>1)
									{
								?>
									<a href="receiver.php?page=<?php echo $page-1; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page-1; ?></button></a>
								<?php
									}
									if($max_page!=1){
								?>
									<a href="receiver.php?page=<?php echo $page; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page; ?></button></a>
								<?php
									}
									
									$p1 = $page + 1;
									if($p1<=$max_page)
									{
								?>
									<a href="receiver.php?page=<?php echo $page+1; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page+1; ?></button></a>
								<?php
									}
									
									$p2 = $page + 2;
									if($p2<=$max_page)
									{
								?>
									<a href="receiver.php?page=<?php echo $page+2; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;"><?php echo $page+2; ?></button></a>
								<?php
									}
									
									if($page<$max_page)
									{
								?>
										<a href="receiver.php?page=<?php echo $page+1; ?>"><button class="btn-success btn-sm"   style="background:#bf40bf;">&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;</button></a>
								<?php
									}
								}
								?>
							</center>
					
							</div>
						</div>
                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
	
	<script src="js/jquery.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

</body>
</html>