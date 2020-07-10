
<div class="brand clearfix">
 <div class = "navbar navbar-default navbar-fixed-top" style="background-color: #4CAF50;">	
 <img src = "../images/ico1.png" style = "float:left;margin-top: 5px; margin-left:5px;" height = "45px" />
    <label class = "navbar-brand" style="font-size: 26px;">ONLINE | JUNKSHOP
    </label>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<?php
        $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
        $q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
        $f = $q->fetch_array();
      ?>
      <?php
            $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `admin` ORDER BY `admin_id` ") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
		<ul class="ts-profile-nav">
		<li class="ts-account">
           <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-user"></span>
            <?php 
              echo $f['firstname']." ".$f['lastname'];
            ?><i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href = "edit_admin.php?id=<?php echo $fetch['admin_id']?>&lastname=<?php echo $fetch['lastname']?>">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
		<?php
						}
			$conn->close();
		?>
	</div>
	</div>
