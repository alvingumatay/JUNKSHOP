<?php require_once'logincheck.php';?>
<!DOCTYPE html>
<html lang = "eng">
  <head>
    <title>Online | Junk Shop</title>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "shortcut icon" href = "../images/ico1.png" />
   <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/customize2.css" />
   <link rel="stylesheet" media="screen" href="../css/jquery-ui.css" />
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
    <?php require 'script.php'?>
  </head>
<body>
  
 <?php include('includes/header.php');?>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row"> 
 
    <div style = "display:none;" id = "add_itr" class = "panel panel-success"> 
      <div class = "panel-heading">
        <label>ADD SCRAP BUYER</label>
        <button id = "hide_itr" style = "float:right; margin-top:-4px;" class = "btn btn-sm btn-danger"><span class = "glyphicon glyphicon-remove"></span> CLOSE</button>
      </div>
      <div class = "panel-body">
        <form id = "form_dental" action="add_scrapbuyer.php" method = "POST" enctype = "multipart/form-data">
          <div style = "float:left;" class = "form-inline">
            <label for = "email">Email:</label>
            <input type="email" class = "form-control"  name = "email" placeholder="(Optional)" /> 
             &nbsp;&nbsp;&nbsp;
            <label for = "password">Password:</label>
            <input type="password" class = "form-control" id="myInput"  name = "password" placeholder="(Optional)" />
            &nbsp;&nbsp;&nbsp;
            <input type="checkbox" onclick="myFunction()">Show Password 
          </div>
          
          <br/>
          <br/>
          <hr />
          <br/>
          <div class = "form-inline">
            <label for = "firstname">Firstname:</label>
            <input class = "form-control" name = "firstname" type = "text" required = "required">
            &nbsp;&nbsp;&nbsp;
            <label for = "middlename">Middle Name:</label>
            <input class = "form-control" name = "middlename" placeholder = "(Optional)" type = "text">
            &nbsp;&nbsp;&nbsp;
            <label for = "lastname">Lastname:</label>
            <input class = "form-control" name = "lastname" type = "text" required = "required">
          </div>
          <br />
          <div class = "form-group">
            <label for = "birthdate" style = "float:left;">Birthdate:</label>
            <br style = "clear:both;" />
             <input type="text" class="form-control"    style = "width:20%;"  name="birthdate"  id="birthdate"> 
      <br />
            <label for = "age">Age:</label>
          <input  type="text" class="form-control"   style = "width:20%;" name = "age" id="age" readonly/>
        <br style = "clear:both;"/>
            <label for = "address">Address:</label>
            <input class = "form-control" name = "address" type = "text" required = "required">
            <br />
            <label for = "contact">Contact:</label>
            <input class = "form-control" style = "width:20%;" min = "0" max = "999" name = "contact" type = "text" maxlength="11">
        </div>
          <br/>
            <div class = "form-inline">
            <button class = "btn btn-success" name = "save_scrapb"><span class = "glyphicon glyphicon-save"></span> SAVE</button>
            </div>
        </form>
           <?php include"add_scrapbuyer.php";?>
      </div>  

    </div>

   
    
    <div class = "panel panel-success">
      <div class = "panel-heading">
        <label>SCRAP BUYER LIST</Label>
      </div>
      <div class = "panel-body">
        <button id = "show_itr" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> ADD SCRAP BUYER</button>
        <br />
        <br />
        <table id = "table" class = "display" width = "100%" cellspacing = "0">
          <thead>
            <tr>
              <th>Scrap Buyer#.</th>
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
            $query = $conn->query("SELECT * FROM `jk` ORDER BY `jk_no` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
            <tr>
              <td><?php echo $fetch['jk_no']?></td>
              <td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
              <td><?php echo $fetch['birthdate']?></td>       
              <td><?php echo $fetch['age']?></td>       
              <td><?php echo $fetch['address']?></td>
              <td><center><a href = "edit_scrapbuyer.php?id=<?php echo $fetch['jk_no']?>&lastname=<?php echo $fetch['lastname']?>" class = "btn btn-sm btn-warning"><span class = "glyphicon glyphicon-pencil"></span> Update</a>
             
            </center></td>
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
</br> </br> </br> </br>
</br> </br> </br> </br>
</br> </br> </br> </br>
</br> 
 <div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
</body>
<script type="text/javascript" rel="stylesheet" src="../js/showhide.js"></script>
 <script type = "text/javascript" src="../js/forward.js"></script>
 <?php include("script.php"); ?>
 <script src="../js/jquery-ui.js"></script>
 <script src="../js/jquery.js"></script>
    <script>
        $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
        });
    </script>
 <script type = "text/javascript">
        $(document).ready(function () {
            var age = "";
            $('#birthdate').datepicker({
                onSelect: function (value, ui) {
                    var today = new Date();
                    age = today.getFullYear() - ui.selectedYear;
                    $('#age').val(age);
                },
                changeMonth: true,
                changeYear: true
            })
        })
    </script>
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

