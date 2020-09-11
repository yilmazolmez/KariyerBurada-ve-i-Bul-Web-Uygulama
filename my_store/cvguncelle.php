<?php
	include "conn.php";
 	
 	 $id=$_POST["id"];

 	 $ad=$_POST["ad"];
       $tc=$_POST["tc"];
       $mail=$_POST["mail"];
       $tel=$_POST["tel"];
       $sifre=$_POST["sifre"];
      $tarih=$_POST["tarih"];
       $anne=$_POST["anne"];
       $baba=$_POST["baba"];
      $adres=$_POST["adres"];
       $sehir=$_POST["sehir"];
       $bolum=$_POST["bolum"];
       $meslek=$_POST["meslek"];
      $okul=$_POST["okul"];
      $ozet=$_POST["ozet"];

 	$queryResult=mysqli_query($connect,"update uyecvbilgi set uyecvadisoyadi='".$ad."',uyecvtcno='".$tc."',uyecveposta='".$mail."',uyecvsifre='".$sifre."',uyecvdogumtarihi='".$tarih."',uyecvanaadi='".$anne."',uyecvbabaadi='".$baba."',uyecvadresi='".$adres."',uyecvsehir='".$sehir."',uyecvtelefonno='".$tel."',uyecvsonmezunbolum='".$bolum."',uyecvmeslekunvani='".$meslek."',uyeecvgitimseviye='".$okul."',uyecvozetbilgi1='".$ozet."'  where uyecvno='".$id."'");


?>