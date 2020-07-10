<?php require_once'logincheck.php'; ?>
<?php
require 'includes/conn.php';
    $conn = mysqli_connect("localhost","root","","junkshop");
    $query = "SELECT * FROM booking WHERE status = 'pending' ORDER BY jk_no desc";
    $sql = mysqli_query($conn, $query);
?>
<?php
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"junkshop");
?>

<html lang = "eng">
  <head>
    <title>Online | Junk Shop</title>
    <meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "../images/mosc-logo.png" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
	  <link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css"> 
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
		<link rel="stylesheet" href="../css/sms.css" />
       <script src="../js/jquery.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
  </head>
<body>
<?php include('includes/header.php');?>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row">  
<?php
        $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
        $q = $conn->query("SELECT * FROM `jk` WHERE `jk_no`") or die(mysqli_error());
        $f = $q->fetch_array();
    ?>

<br/>
<br/>   <br/>
  <div class="panel panel-default">
    <div class="panel-heading"><center><font color="green"><b>APPOINTMENT PENDING DETAILS</b></font></center></div>
    <div class="panel-body">
     <span id="message"></span>
     <div class="table-responsive" id="user_data">
      
     </div>
     <script>
     $(document).ready(function(){
      
      load_user_data();
      
      function load_user_data()
      {
       var action = 'fetch';
       $.ajax({
        url:'action.php',
        method:'POST',
        data:{action:action},
        success:function(data)
        {
         $('#user_data').html(data);
        }
       });
      }
      
      $(document).on('click', '.action', function(){
       var jk_no = $(this).data('jk_no');
       var status = $(this).data('status');
       var action = 'change_status';
       $('#message').html('');
       if(confirm("Are you Sure you want to change status of this User?"))
       {
        $.ajax({
         url:'action.php',
         method:'POST',
         data:{jk_no:jk_no, status:status, action:action},
         success:function(data)
         {
          if(data != '')
          {
           load_user_data();
           $('#message').html(data);
          }
         }
        });
       }
       else
       {
        return false;
       }
      });
      
     });
     </script>
    </div>
   </div>
  </div>
   </div>
  </div>
  </div>
  <center><p> please scroll above to see details</p></center>
  </div>
	<br/><br/>   <br/>   <br/>   <br/>
    <br/><br/>   <br/>   <br/>   <br/>
      <br/><br/>  
<div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
</body>

<?php include("script.php"); ?>
<script type = "text/javascript" src="../jsforward.js"></script>
<script src="../js/confirmdelete.js"></script>
<script src="../js/contact2.js"></script>
<script src="../js/jquery-ui.js"></script>
<!-- Script -->
<script src="../js/appointment.js"></script>
</body>
</html>
<script src="../js/cont.js"></script>

<script>
var tunt = new Audio();
tunt.src = '../sound/doorbell.flac';       
</script>


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
