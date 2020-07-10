<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=junkshop', 'root', '');
	if(!$conn){
		die("Error: Failed to coonect to database!");
	}
?>