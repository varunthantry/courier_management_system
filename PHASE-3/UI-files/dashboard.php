<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 600px;}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding:20px 20px 40px 30px;
      background-color: #ffff00;
      color: #000000;
      font-family: Impact, Charcoal, sans-serif,monospace;
      height: 100%;
      font-weight: italic;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #000000;
      color: white;
      padding: 15px;
      margin-bottom:0px;
    }
    span{
    font-size:15px;
}
a{
  text-decoration:none; 
  color: #0062cc;
  
}
.box{
    padding:60px 0px;
}

.box-part{
    background:#FFF;
    border-radius:0;
    padding:30px 10px;
    margin:30px 0px;
}
.text{
    margin:20px 0px;
}

.fa{
     color:#4183D7;
}
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#00ff00;font-family: Arial, Helvetica, sans-serif; font-weight: 900;">FAST COURIER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    	<p  class="active"><a href="dashboard.php">DASHBOARD</a></p>	
      <p><a href="codet.php">VIEW COURIER DETAILS</a></p>
      <p><a href="staffreg.html">NEW STAFF REGISTRATION</a></p>
      <p><a href="viewemp.php">VIEW EMPLOYEE DETAILS</a></p>
      <p><a href="staffdet.php">VIEW STAFF DETAILS</a></p>

    </div>
    <div class="col-sm-8 text-center"> 
      <div class="box">
    	<div class="container" style="background: #eee;">
     	<div class="row">
			 
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part  text-center">
						<div class="title">
							<h4>TOTAL BOOKING</h4>
							<i class="far fa-chart-bar fa-3x" style='font-size :46px' aria-hidden="true"></i>
						</div>
						<h4>
							<?php
							$sqla="SELECT count(custid) from booking";
							$result=mysqli_query($con,$sqla);
							$row=mysqli_fetch_array($result);
							echo "<h1>{$row['count(custid)']}</h1>";
							?>
						</h4>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part  text-center">
					    
					    
                    
						<div class="title">
							<h4>AWAITING PICKUP</h4>
							<i class="fa fa-hourglass-2 fa-3x" style='font-size :46px' aria-hidden="true"></i>
						</div>
                        <h4>
							<?php
							$sqla="SELECT count(status) from updatecourier WHERE status='AWAITING PICKUP'";
							$result=mysqli_query($con,$sqla);
							$row=mysqli_fetch_array($result);
							echo "<h1>{$row['count(status)']}</h1>";
							?>
						</h4>
						
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part  text-center">
                        
                        <div class="title">
							<h4>SHIPPED</h4>
							<i class="fas fa-truck-loading fa-3x" style='font-size :46px' aria-hidden="true"></i>
							<h4>
							<?php
							$sqla="SELECT count(status) from updatecourier WHERE status='SHIPPED'";
							$result=mysqli_query($con,$sqla);
							$row=mysqli_fetch_array($result);
							echo "<h1>{$row['count(status)']}</h1>";
							?>
						</h4>
						</div>
                        
					 </div>
				</div>	 
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part  text-center">
                        <div class="title">
							<h4>REACHED OFFICE</h4>
							<i class="fa fa-home fa-3x" style='font-size :46px' aria-hidden="true"></i>
							<h4>
							<?php
							$sqla="SELECT count(status) from updatecourier WHERE status='REACHED OFFICE'";
							$result=mysqli_query($con,$sqla);
							$row=mysqli_fetch_array($result);
							echo "<h1>{$row['count(status)']}</h1>";
							?>
						</h4>
						</div>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part  text-center">
					    <div class="title">
							<h4>ON THE WAY</h4>
							<i class="fas fa-truck-moving fa-3x" style='font-size :46px' aria-hidden="true"></i>
							<h4>
							<?php
							$sqla="SELECT count(status) from updatecourier WHERE status='ON THE WAY'";
							$result=mysqli_query($con,$sqla);
							$row=mysqli_fetch_array($result);
							echo "<h1>{$row['count(status)']}</h1>";
							?>
						</h4>
						</div>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <div class="title">
							<h4>DELIVERED</h4>
							<i class="fa fa-check fa-3x" style='font-size :46px' aria-hidden="true"></i>
							<h4>
							<?php
							$sqla="SELECT count(status) from updatecourier WHERE status='DELIVERED'";
							$result=mysqli_query($con,$sqla);
							$row=mysqli_fetch_array($result);
							echo "<h1>{$row['count(status)']}</h1>";
							?>
						</h4>
						</div>
                        
					 </div>
				</div>
		
		</div>		
    </div>
</div>
     
    </div>
  </div>
</div>
<footer class="container-fluid text-center" style="margin-bottom: 0px;">
  <p>@fast courier</p>
</footer>
</body>
</html>