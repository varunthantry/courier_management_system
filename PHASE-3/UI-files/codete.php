<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> View Courier Details</title>
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
      padding:20px 20px 30px 30px;
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
    table{
        border: 1.5px solid black;

      width: 100%;
      color: #588c7e;
      font-family: monospace;
      font-size: 20px;
      text-align: left;
    }
      th {
   background-color: #588c7e;
   color: white;
   font-size: 25px;
    }
  tr:nth-child(even) {background-color: #f2f2f2;}
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
        <li><a href="logoute.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="codete.php">VIEW COURIER DETAILS</a></p>
      <p><a href="upco.php">UPDATE COURIER DETAILS</a></p>
      <p><a href="delco.php">DELETE DELIVERED COURIERS</a></p>
    </div>

    <div class="col-sm-8 text-center"> 
<div class="container">
  <h2 style="color:blue;text-decoration: underline;">Courier Details</h2>
  <table>
<tr>
  <th>CUSTOMER NAME</th>
  <th>CONSIGNMENT NO</th>
  <th>SENDER</th>
  <th>RECEIVER</th>
  <th>SOURCE</th>
  <th>DESTINATION</th>
  <th>AMOUNT</th>
  <th>DATE OF BOOKING</th>
</tr>
 <?php

$db=mysqli_connect("localhost","root","","courier");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$sql="SELECT * FROM booking WHERE csource='{$_SESSION["bcity"]}' OR cdest='{$_SESSION["bcity"]}'";
    $result=mysqli_query($db,$sql) or die("Bad query:");
while($row=mysqli_fetch_assoc($result)){
 echo "<tr><td>{$row['custid']}</td><td>{$row['consid']}</td><td>{$row['csender']}</td><td>{$row['creceiver']}</td><td>{$row['csource']}</td><td>{$row['cdest']}</td><td>{$row['camount']}</td><td>{$row['cdob']}</td></tr>"; 
}

?>
</table>
</div>
</div>
</div>
</div>

<footer class="container-fluid text-center" style="margin-bottom: 0px;">
  <p>@fast courier</p>
</footer>

</body>
</html>
