<?php
	$conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
	$conn->query("DELETE FROM `admin` WHERE `admin_id` = '$_GET[id]'") or die(mysqli_error());
	header("location:admin.php");
