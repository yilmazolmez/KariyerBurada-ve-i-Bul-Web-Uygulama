<?php
	include "conn.php";	

	$result=array();
	$sehir = $_POST["sehir"];
	$meslek = $_POST["meslek"];


 	$queryResult=mysqli_query($connect,"select * from uyefirmaisilanbilgi where meslek like '%$meslek%' and issehir like '%$sehir%' order by isilanno desc  ");
 	 
	 	while ($fetchData=mysqli_fetch_assoc($queryResult)){
	 		$result[]=$fetchData;
	 	}

	 echo json_encode($result);
?>