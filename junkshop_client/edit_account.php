
<?php require_once'../logincheck.php';?>
<?php include 'edit_query.php'; ?>
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
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
<link href="../css3/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
 </head>
<body background="../images/recycle.jpg">
  <?php include('includes/header.php');?>
  <div class="ts-main-content">
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row"> 
  
   <div class = "panel panel-success">  
      <div class = "panel-heading">
        <label>SCRAP BUYER INFORMATION / EDIT</label>
        <a style = "float:right; margin-top:-4px;" href = "account.php" class = "btn btn-success"><span class = "glyphicon glyphicon-hand-right"></span> BACK</a>
      </div>
      <div class = "panel-body">
      <?php
        $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
        $q = $conn->query("SELECT * FROM `jk` WHERE `jk_no` = '$_GET[id]' && `lastname` = '$_GET[lastname]'") or die(mysqli_error());
        $f = $q->fetch_array();
      ?>
      <?php
      $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
      $query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_GET[id]'") or die(mysqli_error());
      $fetch = $query->fetch_array();
    ?>
        <form method = "POST" enctype = "multipart/form-data">
          <div style = "float:left;" class = "form-inline">
            <label for = "email">Email:</label>
            <input class = "form-control"  name = "email" style="width:250px;" value="<?php echo $f['email']?>"required=
            "required"/> 
             &nbsp;&nbsp;&nbsp;
            <label for = "password">Password:</label>
            <input type="password" class = "form-control"  style="width:250px;" id="myInput" value="<?php echo $f['password']?>" name = "password" required=
            "required"/>
            &nbsp;&nbsp;&nbsp;
            <input type="checkbox" onclick="myFunction()">Show Password 
          </div>
          <br />
          <br />
          <br />
          <div class = "form-inline">
            <label for = "firstname">Firstname:</label>
            <input class = "form-control" name = "firstname" value = "<?php echo $f['firstname']?>" type = "text" required = "required">
            &nbsp;&nbsp;&nbsp;
            <label for = "middlename">Middle Name:</label>
            <input class = "form-control" name = "middlename" value = "<?php echo $f['middlename']?>" type = "text" required = "required">
            &nbsp;&nbsp;&nbsp;
            <label for = "lastname">Lastname:</label>
            <input class = "form-control" name = "lastname" value = "<?php echo $f['lastname']?>" type = "text" required = "required">
          </div>
          <br />
          <div class = "form-group">
            <label for = "birthdate" style = "float:left;">Birthdate:</label>
             <br style = "clear:both;" />
                         <input type="text" class="form-control"    style = "width:20%;"  name="birthdate" value = "<?php echo $f['birthdate']?>" id="birthdate"> 
                   <br />
                         <label for = "age">Age:</label>
                       <input  type="text" class="form-control"   style = "width:20%;" name = "age" id="age" value = "<?php echo $f['age']?>"  readonly/>
                     <br style = "clear:both;"/>
            <br />
            <br />
            <label for = "address">Address:</label>
            <input class = "form-control" name = "address" type = "text" value = "<?php echo $f['address']?>" required = "required">
            <br />
            <label for = "contact">Mobile No.:</label>
            <input class = "form-control" style = "width:20%;" name = "contact" type = "text" value = "<?php echo $f['contact']?>" required = "required">
            </div>
          <br />
          <br />
          <div class = "form-inline">
            <button class = "btn btn-warning" name = "edit_account"><span class = "glyphicon glyphicon-pencil"></span> SAVE</button>
          </div>
          
        </form>
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
 <?php {} ?>