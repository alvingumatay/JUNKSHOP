<?php
	$id = $_GET['id'];
	$last = $_GET['lastname'];
	if(ISSET($_POST['edit_scrapbuyer1'])){
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
		$conn->query("UPDATE `jk` SET  `email` = '$email', `password` = '$password', `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `birthdate` = '$birthdate', `age` = '$age', `address` = '$address', `contact` = '$contact' WHERE `jk_no` = '$id' && `lastname` = '$last'") or die(mysqli_error());
		header("location: scrapbuyer.php");
	}
	if(ISSET($_POST['edit_admin'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname = $_POST['lastname'];
			$conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
			$conn->query("UPDATE `admin` SET `username` = '$username', `password` = '$password', `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname' WHERE `admin_id` = '$id'") or die(mysqli_error());
			header("location: admin.php");
		}
	   