
<div class="brand clearfix">
 <div class = "navbar navbar-default navbar-fixed-top" style="background-color: #4CAF50;">	
 <img src = "../images/ico1.png" style = "float:left;margin-top: 5px; margin-left:5px;" height = "45px" />
    <label class = "navbar-brand" style="font-size: 26px;">ONLINE | JUNKSHOP
    </label>
    <a href = "home.php"><label class = "navbar-brand"><i class = "glyphicon glyphicon-home"></i> Dashboard</label></a>
        <ul class = "nav navbar-left">  
        <label class = "navbar-brand"><li class = "dropdown">
          <a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
          <i class = "glyphicon glyphicon-calendar"> Scrap Booking </i>
            
            <b class = "caret"></b>
          </a>
        <ul class = "dropdown-menu">
               <li><a href = "booking.php"><i class = "glyphicon glyphicon-paperclip"></i> Scrap Buyer Booking</a></li>
            <li><a href = "book_history.php"><i class = "glyphicon glyphicon-list"></i> Booking History </a></li>
        </ul>
        </li>
        </label>
      </ul>
		 <?php
        $conn = new mysqli("localhost", "root", "", "junkshop") or die(mysqli_error());
        $q = $conn->query("SELECT * FROM `jk` WHERE `jk_no` = '$_SESSION[jk_no]'") or die(mysqli_error());
        $f = $q->fetch_array();
      ?>
      
     	<ul class="ts-profile-nav">
		<li class="ts-account">
           <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-user"></span>
            <?php 
              echo $f['firstname']." ".$f['lastname'];
            ?><i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href = "edit_account.php?id=<?php echo $f['jk_no']?>&lastname=<?php echo $f['lastname']?>">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
		
		
	</div>
	</div>
