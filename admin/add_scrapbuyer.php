<?php
	if(ISSET($_POST['save_scrapb'])){
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
				echo "<script>alert('Scrap Buyer No. must not be the same!')</script>";
		}else{
			$conn->query("INSERT INTO `jk` VALUES(Null,'$email','$password', '$firstname', '$middlename', '$lastname', '$birthdate','$age', '$address', '$contact')") or die(mysqli_error());
			header('location: scrapbuyer.php');	
		}
	}


	