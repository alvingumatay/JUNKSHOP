<?php require_once'logincheck.php'?>
<?php
    include('includes/conn3.php'); 
    require_once('backup_restore.class.php'); 

    $newImport = new backup_restore($host,$db,$user,$pass);
    

    if(isset($_GET['process'])){
        $process = $_GET['process'];
        if($process == 'backup'){
            $message = $newImport -> backup ();   
        }else if($process == 'restore'){
            $message = $newImport -> restore (); 
            @unlink('backup/database_'.$db.'.sql');
            
        }
    }
    if(isset($_POST['submit'])){        
        $db = 'database_'.$db.'.sql';
        $target_path = 'backup';
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_path . '/' . $db);    
        $message = 'Successfully uploaded. You can now <a href=backuprestore.php?process=restore>restore</a> the database!';
    }
?>
<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Online | Junkshop</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "../images/ico1.png" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
   <link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
     <link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
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
    <center> <h3>Backup / Restore Database</h3>
           
             
                        <?php if(isset($_GET['process'])): ?>
                            <?php 
                                $msg = $_GET['process'];   
                                $class = 'text-center';
                                switch($msg){
                                    case 'backup':
                                        $msg = 'Backup Successfully!<br />Download the <a href=backup/'.$message.' target=_blank >SQL FILE </a> OR RESTORE IT ANY TIME'; 
                                        break;
                                    case 'restore':
                                        $msg = $message; 
                                        break;
                                    case 'upload':
                                        $msg = $message; 
                                        break;
                                    default:
                                        $class = 'hide';
                                }                                
                            ?>
                                <strong><?php echo $msg; ?></strong><br>
                        <?php endif; ?>
                        
        
                <br>
                            <a href="backuprestore.php?process=backup">
                                <button type="button" class="btn btn-success btn-lg span4"><i class="fa fa-database"></i> BACKUP DATABASE</button>
                            </a>
                      
                            <a href="backuprestore.php?process=restore">
                                <button type="button" class="btn btn-info btn-lg span4"><i class="fa fa-database"></i> RESTORE DATABASE</button>
                            </a>
                <br />
                <br />
                    <form method="POST" enctype="multipart/form-data" style="border:1px solid #000; width:600px; padding:20px;">
                        <label>Upload SQL File:</label>
                        <input type="file" name="file" class="form-control">
                        <input type="submit" name="submit" class="btn btn-success" value="Upload Database" />
                    </form>
		<center>
		<br>
		<table border="1" cellspacing="0" cellpadding="12">
			<thead><h3>Admin Account Info</h3></thead>
			<thead>

				<tr>
					<th>Admin ID</th>
					<th>FirstName</th>
					<th>MiddeleName</th>
					<th>LastName</th>
				</tr>
			</thead>
			<tbody>
				<?php	
					$result = mysql_query("SELECT * FROM admin")or die(mysql_error());
					while($row = mysql_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row['admin_id']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['middlename']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
				</tr>
					<?php } ?>
			</tbody>
		</table>
		</center>
	<center>
		<br>
		<table border="1" cellspacing="0" cellpadding="12">
			<thead><h3>Scrap Buyer Account Info</h3></thead>
			<thead>
                 <tr>
					<th>Patient ID</th>
					<th>FirstName</th>
					<th>MiddeleName</th>
					<th>LastName</th>
				</tr>
			</thead>
			<tbody>
				<?php	
					$result = mysql_query("SELECT * FROM jk")or die(mysql_error());
					while($row = mysql_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row['jk_no']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['middlename']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
				</tr>
					<?php } ?>
			</tbody>
		</table>
		</center>
 </div>
  </div>
  </div>
  </div>   
 <div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
</body>
<!-- Script -->
 <script src="../js/jquery-ui.js"></script>
 <script src="../js/jquery.js"></script>
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

