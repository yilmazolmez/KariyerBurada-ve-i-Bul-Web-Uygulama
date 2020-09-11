<?php
	include "conn.php";	

	$result=array();
	$id = $_POST["id"];


 	$queryResult=mysqli_query($connect,"select * from uyefirmaisilanbilgi where uyefirmano='".$id."'");
 	 
	 	while ($fetchData=mysqli_fetch_assoc($queryResult)){
	 		$result[]=$fetchData;
	 	}

	 echo json_encode($result);
?>