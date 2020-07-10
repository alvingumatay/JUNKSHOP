<?php
	$conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
	$conn->query("DELETE FROM `booking` WHERE `book_id` = '$_GET[id]'") or die(mysqli_error());
	header("location:book_history.php");
