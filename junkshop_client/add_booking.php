<?php
    
	if(ISSET($_POST['save_booking'])){
	    $jk_no = $_SESSION['jk_no'];
	    $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$servtype = $_POST['servtype'];
		$contact = $_POST['contact'];
		$image = rand(1000,10000)."-".$_FILES["image"]["name"];
		$filetmpname = $_FILES["image"]["tmp_name"];
		$folder = '../uploads/';
		move_uploaded_file($filetmpname, $folder.'/'.$image);
		$tdate = $_POST['tdate'];
		$dtime = $_POST['dtime'];
		$conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
		$q1 = $conn->query("SELECT * FROM `booking` WHERE `dtime`='$dtime' && `tdate`='$tdate' && `servtype`='$servtype'") or die(mysqli_error());
		$c1 = $q1->num_rows;
		if($c1 > 0){
		        echo '
                <div class="card mx-auto">
				    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Sorry...Some Scrap Booking was already!
                    </div>
                </div>';
		}else{
           $conn->query("INSERT INTO `booking` VALUES(NULL, '$jk_no', '$firstname', '$lastname', '$contact', '$servtype', '$image', '$tdate', '$dtime', 'pending')");
        
            echo '<div class="card mx-auto">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Scrap Booking sent successfully! Wait for Admin approval
                    </div>
                </div>';
               
           }
		$conn->close();
	}