<?php
require('db.php');
include("auth.php");
$uname = $_SESSION['rollno'];
$i=0;

//include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript">
    //taking numeric values
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    </script>
</head>
<body>
<div class="form">
  <center><u><h1>Dashboard</h1></u>
<p>This is another secured page.</p>
<p><a class="w3-button w3-teal w3-padding-large" href="index.php">Home</a>
<a class="w3-button w3-teal w3-padding-large" href="logout.php">Logout</a></p>
<br />
<h1>welcome <?php echo " $uname";?></h1>
</div>
<div class="row">
        <div class="col-md-12">
          <div class="btn-group" >
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-left: 50%;" > Dropdown </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="map.html">BUS 14523</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">BUS 15748</a>
            </div>
          </div>
        </div>
      </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
