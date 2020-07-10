<?php
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(ISSET($_POST['login'])){
		$conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
		$query = $conn->query("SELECT *FROM `jk` WHERE `email` = '$email' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$valid = $query->num_rows;
			if($valid > 0){
				$_SESSION['jk_no'] = $fetch['jk_no'];
				header("location:./junkshop_client/home.php");
			}else{
				echo "<script>alert('Invalid email or password')</script>";
				echo "<script>window.location = 'home.php'</script>";
			}
		$conn->close();
	}	