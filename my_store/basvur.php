<?php
	include "conn.php";
 	
 	 $isilanno=$_POST["isilanno"];
 	 $uyefirmaunvani=$_POST["uyefirmaunvani"];
 	 $uyecvno=$_POST["uyecvno"];
 	$uyecvadisoyadi=$_POST["username"];
 	 $isaciklamasi=$_POST["isaciklamasi"];
 	 $basvurunotlari=$_POST["ilannot"];
 	 
 	 $uyefirmano=$_POST["uyefirmano"];
 	 $meslek=$_POST["meslek"];

 	   $basvurutarihi=$_POST["tarih"];

 	// $queryResult=mysqli_query($connect,"insert into uyefirmaisilanbasvurubilgi(isilanno,uyefirmaunvani,uyecvno,uyecvadisoyadi,isaciklamasi,basvurunotlari,basvurutarihi,uyefirmano,meslek)values('".$isilanno."','".$uyefirmaunvani."','".$uyecvno."','".$uyecvadisoyadi."','".$isaciklamasi."','".$isilannotlari."','".$basvurutarihi."','".$uyefirmano."','".$meslek."')");

 	$queryResult=mysqli_query($connect,"insert into uyefirmaisilanbasvurubilgi(uyecvadisoyadi,isilanno,isaciklamasi,uyefirmaunvani,uyefirmano,uyecvno,meslek,basvurutarihi,basvurunotlari)values('".$uyecvadisoyadi."','".$isilanno."','".$isaciklamasi."','".$uyefirmaunvani."','".$uyefirmano."','".$uyecvno."','".$meslek."','".$basvurutarihi."','".$basvurunotlari."')");

?>