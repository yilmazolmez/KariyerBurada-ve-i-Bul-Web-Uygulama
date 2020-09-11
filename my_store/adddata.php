<?php
	include "conn.php";
 	
 	$name=$_POST["name"];
 	$email=$_POST["email"];
 	$telefon=$_POST["telefon"];
 	$cevap=$_POST["cevap"];
 	$sifre=$_POST["sifre"];
 	$sehir=$_POST["sehir"];
 	$gizlisoru=$_POST["gizlisoru"];

 	$queryResult=mysqli_query($connect,"insert into uyecvbilgi(uyecvadisoyadi,uyecveposta,uyecvtelefonno,yanit,uyecvsifre,uyecvsehir,gizlisoru)values('".$name."','".$email."','".$telefon."','".$cevap."','".$sifre."','".$sehir."','".$gizlisoru."')");


?>