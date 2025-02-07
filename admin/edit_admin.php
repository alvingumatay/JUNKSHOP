<?php require_once 'logincheck.php'; ?>
<?php include 'edit_query.php'; ?>
<!DOCTYPE html>
<html lang = "eng">
  <head>
    <title>Online | Junk Shop</title>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "shortcut icon" href = "../images/ico1.png" />
    <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
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
<body>
<?php include('includes/header.php');?>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row">   
<div class = "panel panel-success">	
	<?php
      $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
      $query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_GET[id]'") or die(mysqli_error());
      $fetch = $query->fetch_array();
    ?>
			<div class = "panel-heading">
				<label>EDIT ADMINISTRATOR</label>
				<a href = "admin.php" class = "btn btn-sm btn-info" style = "float:right; margin-top:-5px;"><span class = "glyphicon glyphicon-hand-right"></span> BACK</a>
			</div>
			<div class = "panel-body">
				<form id = "form_admin" method = "POST" enctype = "multi-part/form-data" >
					<div class = "panel panel-default" style = "width:60%; margin:auto;">
					<div class = "panel-heading">
					</div>
					<div class = "panel-body">
						<div class = "form-group">
							<label for = "username">Username: </label>
							<input class = "form-control" name = "username" value = "<?php echo $fetch['username'] ?>" type = "text" required = "required">
						</div>
						<div class = "form-group">	
							<label for = "password">Password: </label>
							<input class = "form-control" id="myInput" name = "password" value = "<?php echo $fetch['password']?>" maxlength = "12" type = "password" required = "required">
              <br/>
              <input type="checkbox" onclick="myFunction()">Show Password
						</div>
						<div class = "form-group">
							<label for = "firstname">Firstname: </label>
							<input class = "form-control" type = "text" name = "firstname" value = "<?php echo $fetch['firstname'] ?>" required = "required">
						</div>
						<div class = "form-group">
							<label for = "middlename">Middlename: </label>
							<input class = "form-control" type = "text" name = "middlename" value = "<?php echo $fetch['middlename'] ?>">
						</div>
						<div class = "form-group">
							<label for = "lastname">Lastname: </label>
							<input class = "form-control" type = "text" name = "lastname" value = "<?php echo $fetch['lastname'] ?>">
						</div>
							<button  class = "btn btn-warning" name = "edit_admin" ><span class = "glyphicon glyphicon-edit"></span> SAVE</button>
							<br />
					</div>
					<?php require 'edit_query.php' ?>					
					</div>
				</form>
			</div>	
		</div>
  </div>
  </div>
  </div>

 <div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
    
</body>
<?php require'script.php' ?>
<script type = "text/javascript" src="../js/confirmdelete.js"></script>
<script type = "text/javascript" src="../js/forward.js"></script>
<script type = "text/javascript" src="../js/showhide.js"></script>

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
