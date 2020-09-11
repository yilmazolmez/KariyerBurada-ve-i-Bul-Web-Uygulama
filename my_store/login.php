<?php
 	include "conn.php";	
 	$username=$_POST["username"];
 	$password=$_POST["password"];
	$result=array();



 	$queryResult=mysqli_query($connect,"select * from uyecvbilgi where uyecveposta='".$username."' and uyecvsifre='".$password."'");
 	$queryResult1=mysqli_query($connect,"select * from uyefirmabilgi where uyefirmaeposta='".$username."' and uyefirmasifre	='".$password."'");
 	if(mysqli_num_rows($queryResult) == 1)
	{
	 	while ($fetchData=mysqli_fetch_assoc($queryResult)){
	 		$result[]=$fetchData;
	 	}
	}
	else if (mysqli_num_rows($queryResult1) == 1)
	 {
	 	
	 	while ($fetchData1=mysqli_fetch_assoc($queryResult1)){
	 		$result[]=$fetchData1;
	 	}

	 }

	 echo json_encode($result);

?>