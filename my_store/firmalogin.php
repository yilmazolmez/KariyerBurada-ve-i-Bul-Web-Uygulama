<?php
 	include "conn.php";	
 	$username=$_POST["username"];
 	$password=$_POST["password"];

 	$queryResult=mysqli_query($connect,"select * from uyefirmabilgi where uyefirmaeposta='".$username."' and uyefirmasifre	='".$password."'");
 	$result=array();
 	while ($fetchData=mysqli_fetch_assoc($queryResult)){
 		$result[]=$fetchData;
 	}
 	echo json_encode($result);
?>