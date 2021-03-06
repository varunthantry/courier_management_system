<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIEW STAFF DETAILS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
      <p ><a href="dashboard.php">DASHBOARD</a></p>  
      <p><a href="codet.php">VIEW COURIER DETAILS</a></p>
      <p><a href="staffreg.html">NEW STAFF REGISTRATION</a></p>
      <p  class="active"><a href="viewemp.php">VIEW EMPLOYEE DETAILS</a></p>
      <p><a href="staffdet.php">VIEW STAFF DETAILS</a></p>


    </div>
    <div class="col-sm-8 text-center">
      <h2 style="color:blue;text-decoration: underline;">Staff Details</h2> 
      <table class="table table-bordered">
    <thead style="background-color:#ffffff;color: #000000;">
      <tr>
        <th>STAFF-ID</th>
        <th>STAFF-NAME</th>
        <th><b>SALARY</b></th>
        <th><b>NO:OF COURIERS DELIVERED</b></th>
      </tr>
    </thead>
    <tbody>
<?php

$db=mysqli_connect("localhost","root","","courier");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$sql="SELECT * FROM staff";
    $result=mysqli_query($db,$sql) or die("Bad query:");
while($row=mysqli_fetch_assoc($result)){
  $name=$row['st_name'];
  $name=strtoupper($name);
 echo "<tr><td>{$row['staff_id']}</td><td>".$name."</td><td><b>{$row['stsalary']}</b></td><td><b>{$row['no_of_del']}</b></td></tr>"; 
}

?>
    </tbody>
  </table>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="margin-bottom: 0px;">
  <p>@fast courier</p>
</footer>

</body>
</html>
