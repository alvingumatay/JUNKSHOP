<?php
	session_start();
		if(!ISSET($_SESSION['jk_no']))
			{
				header('location:home.php');
			}
?>