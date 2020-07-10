<?php
	session_start();
	unset($_SESSION['jk_no']);
	header('location:../home.php');