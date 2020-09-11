<?php
	include "conn.php";
 	
 	 $id=$_POST["id"];

 	 $egitimdurumu=$_POST["egitimdurumu"];
       $askerlikdurumu=$_POST["askerlikdurumu"];
       $cinsiyet=$_POST["cinsiyet"];
       $yassinir=$_POST["yassinir"];
       $lokasyon=$_POST["lokasyon"];
       $sehir=$_POST["sehir"];
       $issaatleri=$_POST["issaatleri"];
       $meslek=$_POST["meslek"];
       $maas=$_POST["maas"];
       $tecrubeyil=$_POST["tecrubeyil"];
       $basmalatarih=$_POST["basmalatarih"];
       $bitistarih=$_POST["bitistarih"];
       $isaciklama=$_POST["isaciklama"];
       $ilannotlari=$_POST["ilannotlari"];
       $tur=$_POST["tur"];
       $sorgu=mysqli_query($connect,"select * from uyefirmabilgi where uyefirmano='".$id."'");
       $sonuc=mysqli_fetch_assoc($sorgu);

 	$queryResult=mysqli_query($connect,"insert into uyefirmaisilanbilgi(uyefirmano,isegitimdurum,isaskerlikdurum,iscinsiyet,isyassiniri,issaatleri,islokasyonu,issehir,meslek,ismaasi,istecrubeyil,isbasvurubaslamatarihi,isbasvurubitistarihi,isaciklamasi,isilannotlari,tur,uyefirmaunvani,resim)values('".$id."','".$egitimdurumu."','".$askerlikdurumu."','".$cinsiyet."','".$yassinir."','".$issaatleri."','".$lokasyon."','".$sehir."','".$meslek."','".$maas."','".$tecrubeyil."','".$basmalatarih."','".$bitistarih."','".$isaciklama."','".$ilannotlari."','".$tur."','".$sonuc["uyefirmaunvani"]."','".$sonuc["uyefirmaresim2"]."')");



?>