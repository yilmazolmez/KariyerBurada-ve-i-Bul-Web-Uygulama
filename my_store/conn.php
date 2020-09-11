<?php
 	$connect=mysqli_connect("localhost","root","","isveiscidatabase"); 
	if (!$connect) 
 	{
    	die("Connection failed: " . mysqli_connect_error());
	}
?>