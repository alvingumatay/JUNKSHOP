<?php require_once'../logincheck.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online | Junk Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link rel = "shortcut icon" href = "../images/ico1.png" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel = "stylesheet" type = "text/css" href = "../css/customize2.css" />
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
<link href="../css/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="../src/bootstrap.min.css" />
<link rel="stylesheet" href="../css/input-to-dropdown.css">
<script src="../js/input-to-dropdown.js"></script>
<script src="../js3/jquery.min.js"></script>
<link rel="stylesheet" href="../src/bootstrap.css" />
<link rel="stylesheet" href="../src/style.css" />
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
<script type= "text/javascript" src="../vendor/countries.js"></script>
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
<link href="../css3/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 </head>
<body background="../images/recycle.jpg">
<?php include('includes/header.php');?>
<div class="ts-main-content">
<div class="content-wrapper">
<div class="container-fluid">
<div class="row"> 
<div class = "panel panel-success">
      <div class = "panel-heading">
        <label>PATIENTS LIST</Label>
      </div>
      <div class = "panel-body">
        <table id = "table" class = "display" width = "100%" cellspacing = "0">
          <thead>
            <tr>
              <th>Email</th>
              <th>Name</th>
              <th>Birthdate</th>
              <th>Age</th>
              <th>Address</th>
              
              <th><center>Action</center></th>
            </tr>
          </thead>
          <tbody>
          <?php
            $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `jk` WHERE `jk_no`='$_SESSION[jk_no]'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            $id = $fetch['jk_no'];
            $q = $conn->query("SELECT COUNT(*) as total FROM `booking` where `jk_no` = '$id' && `status` = 'Pending'") or die(mysqli_error());
            $f = $q->fetch_array();
          ?>
            <tr>
              <td><?php echo $fetch['email']?></td>
              <td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
              <td><?php echo $fetch['birthdate']?></td>       
              <td><?php echo $fetch['age']?></td>       
              <td><?php echo $fetch['address']?></td>
              <td><center><a href = "edit_account.php?id=<?php echo $fetch['jk_no']?>&lastname=<?php echo $fetch['lastname']?>" class = "btn btn-sm btn-warning"><span class = "glyphicon glyphicon-pencil"></span> Update</a></center></td>
            </tr>
          <?php
            }
            $conn->close();
          ?>
          </tbody>
          </table>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  <div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
 </body>
<script src="../js2/jquery-ui.js"></script>
<script src="../js3/bootstrap.min.js"></script>
<script src="../js/jquery-ui.js"></script>
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
</html>
 