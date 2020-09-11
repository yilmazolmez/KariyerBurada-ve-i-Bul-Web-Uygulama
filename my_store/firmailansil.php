<?php
	include "conn.php";
 	
 	 $id=$_POST["id"];
 

 	$queryResult=mysqli_query($connect,"delete from uyefirmaisilanbilgi where isilanno='".$id."'");


?>