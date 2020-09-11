<?php
 	include "conn.php";	

 	$mail=$_POST["mail"];
 	$cevap=$_POST["yanit"];

	$result=array();

												$s1="select * from uyefirmabilgi where uyefirmaeposta='".$mail."' and yanit='".$cevap."'";
 	 											$s2="select * from uyecvbilgi where uyecveposta='".$mail."' and yanit='".$cevap."'";
												$r1=mysqli_query($connect,$s1);
												$r2=mysqli_query($connect,$s2);
												if(mysqli_num_rows($r1) == 1)
												{
													$s="select * from uyefirmabilgi where uyefirmaeposta='".$mail."'";
													$r=mysqli_query($connect,$s);
													if($fetchData=mysqli_fetch_assoc($r)){
												 		$result[]=$fetchData;
												 	}
												}
												else if(mysqli_num_rows($r2) == 1)
												{
													$s="select * from uyecvbilgi where uyecveposta='".$mail."'";
													$r=mysqli_query($connect,$s);
													 if($fetchData=mysqli_fetch_assoc($r)){
												 		$result[]=$fetchData;
												 	}
													 
												}
  

	 echo json_encode($result);

?>