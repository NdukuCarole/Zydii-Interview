<?php
	$conn = mysqli_connect("localhost", "root", "", "Interview");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>