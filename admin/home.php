<?php require_once 'logincheck.php'; ?>
<!DOCTYPE html>
<html lang = "eng">
  <head>
    <title>Online | Junk Shop</title>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "shortcut icon" href = "../images/ico1.png" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
   <link rel = "stylesheet" type = "text/css" href = "../css/customize2.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/footer.css" />
   <link rel="stylesheet" href="../css6/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../css6/bootstrap.min.css">
  <!-- Bootstrap Datatables -->
  <link rel="stylesheet" href="../css6/dataTables.bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../css6/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../css6/bootstrap-select.css">
  <!-- Bootstrap file input -->
  <link rel="stylesheet" href="../css6/fileinput.min.css">
  <!-- Awesome Bootstrap checkbox -->
  <link rel="stylesheet" href="../css6/awesome-bootstrap-checkbox.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../css6/style.css">

 
   <link rel="stylesheet" href="../css/footer.css">
       <?php require 'script.php'?>
  </head>
<body>

  <?php include('includes/header.php');?>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row">
  <div class = "panel panel-success">
      <div class = "panel-heading">
        <center><label>D A S H B O A R D</label></center>
      </div>
      <div class = "panel-body">
        <div class="dash">
      <center>
          <a href="scrapbuyer.php" style="pointer-events: unset;">
            <label style="background-color: dodgerblue; cursor: pointer;"><i class="glyphicon glyphicon-user"></i>
              
              <?php 
                $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error()); 
                $qsbuyer = $conn->query("SELECT COUNT(jk_no) AS total FROM `jk`") or die(mysqli_error());
                $fsbuyer = $qsbuyer->fetch_array();
                $num_rows = $fsbuyer['total'];
          
                echo $num_rows;
              ?>
              
            <span style="font-size: 13px;">
                Scrap Buyer
              </span>
              <p  style="font-size: 17px;">Full Detail &nbsp; <i class="glyphicon  glyphicon-arrow-right" style="font-size:18px;"></i></p>
            </label>
            </label>
          </a>
          
         <a href="booking.php">
            <label style="background-color: dodgerblue; cursor: pointer;"><i class="glyphicon glyphicon-calendar"></i>
              
              <?php 
  
                $qpbook = $conn->query("SELECT COUNT(jk_no) AS total FROM `booking` WHERE `status` = 'pending'") or die(mysqli_error());
                $fpbook = $qpbook->fetch_array();
                $num_rows = $fpbook['total'];
          
                echo $num_rows;
              ?>
              
            <span style="font-size: 13px;">
                Pending Scrap Booking
              </span>
              <p  style="font-size: 17px;">Full Detail &nbsp; <i class="glyphicon  glyphicon-arrow-right" style="font-size:18px;"></i></p>
            </label>
          </a>
        </center>
        </div>
      </div>
    </div>
</div>    
</div>
</div>
</div>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/>
  <div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
  <!-- Loading Scripts -->
  <script src="../js5/jquery.min.js"></script>
  <script src="../js5/bootstrap-select.min.js"></script>
  <script src="../js5/bootstrap.min.js"></script>
  <script src="../js5/jquery.dataTables.min.js"></script>
  <script src="../js5/dataTables.bootstrap.min.js"></script>
  <script src="../js5/Chart.min.js"></script>
  <script src="../js5/fileinput.js"></script>
  <script src="../js5/chartData.js"></script>
  <script src="../js5/main.js"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 3000);
          });
  </script>
</body>
</html>

