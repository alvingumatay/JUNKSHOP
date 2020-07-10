<?php
  require_once '../logincheck.php';
?>
<?php
require 'includes/conn.php';
$conn = mysqli_connect("localhost", "root", "", "junkshop");
$query = "SELECT * FROM booking WHERE `jk_no`='$_SESSION[jk_no]'";
$sql = mysqli_query($conn, $query);
?>

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
   <!-- CSS Just for demo purpose, don't include it in your project -->
        
    <?php require 'script.php'?>
    </head>

 </head>
<body background="../images/recycle.jpg">
<?php include('includes/header.php');?>
  <div class="ts-main-content">
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row">
    <br />
    <br /> 
    <br /><br />
    <br /> 
    <br /><br />
    <br /> 
    <div class = "panel panel-success">
      <div class = "panel-heading">
        <label>BOOKING SCRAP STATUS LOG</Label>
        <a style = "float:right; margin-top:-4px;" href = "booking.php" class = "btn-sm btn-info"><span class = "glyphicon glyphicon-hand-right"></span> BACK</a> 
      </div>
      <div class = "panel-body">
        
        <br />
        <br />
         <?php
            $conn = new mysqli('localhost','root','','junkshop') or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `jk` WHERE `jk_no`='$_SESSION[jk_no]'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
          <div class="table-responsive">
          <table id = "table" class = "display" width = "100%" cellspacing = "0">
          <thead>
            <tr>
                <th>Buyer Name:</th>
             <th>Service Type Cost:</th>
              <th>Scrap Item:</th>
              <th>Date:</th>
              <th>Time:</th>
              <th>Status:</th>
              <th>Action:</th>
            </tr>
          </thead>
          <tbody>
         <?php
               
                 while($row= mysqli_fetch_array($sql))
                 {
                 ?>
                 <tr>
                  <td><?php echo $fetch['firstname']." ".$fetch['lastname'] ?></td>
                    <td><?php echo $row["servtype"]; ?></td>  
                    <td><img src="../uploads/<?php echo $row["image"]; ?>" width="100px" height="100px" style="border:1px solid #333333;"></td>
                    <td><?php echo $row["tdate"]; ?></td>  
                    <td><?php echo $row["dtime"]; ?></td>
           <td><?php echo $row["status"];?></td>
             <td><a class="btn btn-danger" onclick="confirmationDelete(this);return false;" href="delete_book.php?id=<?php echo $row['book_id']?>">
             <span class="glyphicon glyphicon-trash "></span> Cancel</a></td>   
        </tr>
          <?php
            }
            $conn->close();
          }
          ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
</div>    
</div>
</div>
</div>
<br /><br /><br /><br /> 
<br /><br />
  <div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
 </body>
 <script type = "text/javascript" src="../js/confirmdelete.js"></script>
 <!-- Loading Scripts -->

<script src="../js5/bootstrap-select.min.js"></script>
<script src="../js5/bootstrap.min.js"></script>
<script src="../js5/jquery.dataTables.min.js"></script>
<script src="../js5/dataTables.bootstrap.min.js"></script>
<script src="../js5/Chart.min.js"></script>
<script src="../js5/fileinput.js"></script>
<script src="../js5/chartData.js"></script>
<script src="../js5/main.js"></script>
 </html>
