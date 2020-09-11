<?php
	include "conn.php";
 	
 	$name=$_POST["name"];
 	$email=$_POST["email"];
 	$telefon=$_POST["telefon"];
 	$cevap=$_POST["cevap"];
 	$sifre=$_POST["sifre"];
 	$sehir=$_POST["sehir"];
 	$gizlisoru=$_POST["gizlisoru"];

 	$queryResult=mysqli_query($connect,"insert into uyefirmabilgi(uyefirmaunvani,uyefirmaeposta,uyefirmatelefonno,yanit,uyefirmasifre,uyefirmasehir,gizlisoru)values('".$name."','".$email."','".$telefon."','".$cevap."','".$sifre."','".$sehir."','".$gizlisoru."')");


?>