<?php require_once'logincheck.php'; ?>
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
 <div class = "panel-heading">
				<label>SCRAP BUYER LIST</Label>
			</div>
			 <div class = "panel-body">
				<br />
				<br />
				<div class="table-responsive">
				<table id = "table" class = "display" width = "100%" cellspacing = "0">
					<thead>
						<tr>
							<th>Scrap Buyer Name</th>
							<th>Scrap Services Cost</th>
							<th>Item Description</th>
							<th>Time</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$conn = new mysqli("localhost", "root", "", "junkshop") or die(mysqli_error());
						$query = $conn->query("SELECT * FROM `booking` WHERE `status` = 'done' ORDER BY `dtime` DESC") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					    ?>
						<tr>
					        <td><?php echo $fetch['firstname']."   ".$fetch['lastname'] ?></td>
							<td><?php echo $fetch['servtype']?></td>
							<td><img src="../uploads/<?php echo $fetch['image']; ?>" width="100px" height="100px" style="border:1px solid #333333;"></td>
							<td><?php echo $fetch['dtime']?></td>
							<td><?php echo $fetch['tdate']?></td>
							<td><?php echo $fetch['status']?></td>
						<!--	<td> <a class="btn btn-danger" onclick="confirmationDelete(this);return false;"  href="delete_appoint.php?id=<?php echo $fetch['itr_no']?>"><span class="glyphicon glyphicon-trash "></span> Cancel</a></td> -->
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
  </div>
	<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright MOSC Patient Record System 2019</label>
	</div>
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
</body>
</html>	
