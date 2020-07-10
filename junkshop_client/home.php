<?php require_once'../logincheck.php'; ?>
<html lang = "eng">
  <head>
    <title>Online | Junk Shop</title>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "shortcut icon" href = "../images/ico1.png" />
    <link rel = "shortcut icon" href = "../images/ico1.png" />
   <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/customize2.css" />
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
    <link rel="stylesheet" href="../css6/style1.css">
    <script type= "text/javascript" src="../vendor/countries.js"></script>
   <link rel="stylesheet" href="../css/footer.css">
 <?php require 'script.php'?>
</head>
<body background="../images/recycle.jpg">
<?php include('includes/header.php');?>
  <div class="ts-main-content">
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row">
    <br /> <br /> <br /> <br /> <br /> <br />
     <div class="dash">
         <center>
      <a href="book_history.php" style="pointer-events: unset;">
      <label style="background-color: dodgerblue;  cursor: pointer;"><i class="glyphicon glyphicon-refresh"></i>
            <?php 
                  $qbooking = $conn->query("SELECT COUNT(*) AS total FROM `booking` NATURAL JOIN `jk`  where `status`= 'pending' && `jk_no`='$_SESSION[jk_no]' ") or die(mysqli_error());
            $fbooking = $qbooking->fetch_array();
            $num_rows = $fbooking['total'];
          
          echo $num_rows;
        ?>
              
         <span style="font-size: 20px;">Pending Scrap Booking</span>
            <p  style="font-size: 17px;">Full Detail &nbsp; <i class="glyphicon  glyphicon-arrow-right" style="font-size:18px;"></i></p>
            </label>
          </a>
          
          <a href="book_history.php">
            <label style="background-color: dodgerblue; cursor: pointer;"><i class="glyphicon glyphicon-check"></i>
              <?php 
                              $qbooking = $conn->query("SELECT COUNT(*) AS total FROM `booking` NATURAL JOIN `jk` WHERE `status`= 'accept' && `jk_no`='$_SESSION[jk_no]' ") or die(mysqli_error());
                $fbooking = $qbooking->fetch_array();
                $num_rows = $fbooking['total'];
          
                echo $num_rows;
              ?>
        
              <span style="font-size: 20px;">Accept Booking</span>
              <p  style="font-size: 17px;">Full Detail &nbsp; <i class="glyphicon  glyphicon-arrow-right" style="font-size:18px;"></i></p>
            </label>
          </a>
          </center>
        </div>
      <br/>
  <div class = "well">
   <font size="3px">Welcome !!! to Patient Online Appointment. From here you can create an appointment slot.
             Before you begin please read the terms and conditions.</font>
      <br/><br/><br/>
      <caption><font color="red"><font size="4px">Note:</font></font></caption>
      <br/>
      <font size="3px">
        1. Carefully  review all fields in the online form and provide complete and accurate information. Ensure that you have a valid email address.<br/.> 
        2. The system relies on email messaging to your updates. Depending on actual server load and network traffic, the server may take some time before it can send a confirmation email for selected booking.
        <br/>
        3. Depending on your email provider and configuration settings, the system-generated email may be correctly tagged as spam and delivered to your JUNK/SPAM text message an appointment confirmation.
      </font>
      <br/>  <br/>
      <center><h3>TERMS AND CONDITION</h3></center>
      <br/>
      <font size="3px">
        This appointment and scheduling system allocates instant message replay after you apply an appointment. this is first come first serve basis. Limited slots are available per site and there is no guarantee that slot will always available  for user's first choice for an appointment schedule.
        <br/><br/>
        Users. accept the irresponsibility for supplying, checking verifying the accuracy and correctness of the of information they provide on the system in connection with their application, and consent to the collection and use of their personal information. 
        <br/> <br/>
        Deliberate, multiple attemps to circumvent the system to secure a schedule for the purpose of blocking several dates in advance is demetrial to public serve. Users who are found abused this system will be block in securing an appoinment.
   </font>
      
  </div>
</div>
</div>
</div>
</div>
 <div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
 </body>
 <!-- Loading Scripts -->
 
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
</html>
