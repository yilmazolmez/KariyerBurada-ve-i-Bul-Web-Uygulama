<?php
	include "conn.php";	

	$result=array();
	$tur = $_POST["tur"];


 	$queryResult=mysqli_query($connect,"select * from uyefirmaisilanbilgi where tur like '%$tur%' order by isilanno desc limit 0,8");
 	 
	 	while ($fetchData=mysqli_fetch_assoc($queryResult)){
	 		$result[]=$fetchData;
	 	}

	 echo json_encode($result);
?>