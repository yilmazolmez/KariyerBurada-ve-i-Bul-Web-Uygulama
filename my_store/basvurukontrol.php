<?php
	include "conn.php";
  
	$result=array();

	$isilanno = $_POST["isilanno"];
	$uyecvno = $_POST["uyecvno"];
  
 	$queryResult=mysqli_query($connect,"select * from uyefirmaisilanbasvurubilgi where isilanno='".$isilanno."' and uyecvno='".$uyecvno."' ");

if($fetchData=mysqli_fetch_assoc($queryResult)){
	 		$result[]=$fetchData;
	 	}

	 echo json_encode($result);
?>