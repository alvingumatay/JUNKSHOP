<?php
	if(ISSET($_POST['save_register'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$birthdate = $_POST['birthdate'];
		$age = $_POST['age'];
        $address = $_POST['address'];
		$contact = $_POST['contact'];
	    $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
		$q1 = $conn->query("SELECT * FROM `jk` WHERE `email` = '$email'") or die(mysqli_error());
		$c1 = $q1->num_rows;
		if($c1 > 0){
				 echo '
                 <div class="card mx-auto">
				<div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          Your account was already!
        </div> </div>';
		}else{
			$conn->query("INSERT INTO `jk` VALUES(Null,'$email','$password','$firstname', '$middlename', '$lastname', '$birthdate','$age', '$address', '$contact')") or die(mysqli_error());
			echo '<div class="card mx-auto">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Success! Register was sent successfully.
        </div>

    </div>';	

		
		}
	}

?>
	

