<?php require_once 'logincheck.php'; ?>
<?php include 'add_admin.php'; ?>
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
<div id = "add" class = "panel panel-success">  
      <div class = "panel-heading">
        <label>ADD ADMINISTRATOR</label>
        <button id = "hide" class = "btn btn-sm btn-danger" style = "float:right; margin-top:-5px;"><span class = "glyphicon glyphicon-remove"></span> CLOSE</button>
      </div>
      <div class = "panel-body">
        <form id = "form_admin" method = "POST" enctype = "multi-part/form-data" >
          <div class = "panel panel-default" style = "width:60%; margin:auto;">
          <div class = "panel-heading">
          </div>
          <div class = "panel-body">
            <div class = "form-group">
              <label for = "username">Username: </label>
              <input class = "form-control" name = "username" type = "text" required = "required">
            </div>
            <div class = "form-group">  
              <label for = "password">Password: </label>
              <input class = "form-control" name = "password" maxlength = "12" type = "password" required = "required">
            </div>
            <div class = "form-group">
              <label for = "firstname">Firstname: </label>
              <input class = "form-control" type = "text" name = "firstname" required = "required">
            </div>
            <div class = "form-group">
              <label for = "middlename">Middlename: </label>
              <input class = "form-control" type = "text" placeholder = "(Optional)" name = "middlename">
            </div>
            <div class = "form-group">
              <label for = "lastname">Lastname: </label>
              <input class = "form-control" type = "text" name = "lastname">
            </div>
              <button  class = "btn btn-success" name = "save_admin" ><span class = "glyphicon glyphicon-save"></span> SAVE</button>
              <br />
          </div>
                
          </div>
        </form>
      </div>  
    </div>  
    <div class = "panel panel-success">
      <div class = "panel-heading">
        <label>ACCOUNTS / ADMINISTRATOR</Label>
      </div>
      <div class = "panel-body">
        <button id = "show" class = "btn btn-success"><span class  = "glyphicon glyphicon-plus"></span> ADD</button>
        <br />
        <br />    
        <table id = "table" class = "display" cellspacing = "0"  >
          <thead>
            <tr>
              <th>Username</th>
              <th>Password</th>
              <th>Name</th>
              <th><center>Action</center></th>
            </tr>
          </thead>
          <tbody>
          <?php
            $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `admin` ORDER BY `admin_id` ") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
            <tr>
              <td><?php echo $fetch['username']?></td>
              <td><?php echo md5($fetch['password'])?></td>
              <td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
              <td><center><a class = "btn btn-sm btn-warning" href = "edit_admin.php?id=<?php echo $fetch['admin_id']?>&lastname=<?php echo $fetch['lastname']?>"><i class = "glyphicon glyphicon-edit"></i> Update</a> <a onclick="confirmationDelete(this);return false;" href = "delete_admin.php?id=<?php echo $fetch['admin_id']?>" class = "btn btn-sm btn-danger"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
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
<br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/>
<br/><br/><br/>

  <div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
</body>
<?php require'script.php' ?>
<script type = "text/javascript" src="../js/confirmdelete.js"></script>
<script type = "text/javascript" src="../js/forward.js"></script>

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
