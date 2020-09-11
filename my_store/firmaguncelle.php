<?php
	include "conn.php";
 	
 	 $id=$_POST["id"];

 	 $uyefirmaunvani=$_POST["uyefirmaunvani"];
       $uyefirmaadres=$_POST["uyefirmaadres"];
       $uyefirmaeposta=$_POST["uyefirmaeposta"];
       $uyefirmasifre=$_POST["uyefirmasifre"];
       $uyefirmasehir=$_POST["uyefirmasehir"];
      $uyefirmavergino=$_POST["uyefirmavergino"];
       $uyefirmavergidairesi=$_POST["uyefirmavergidairesi"];
       $uyefirmatelefonno=$_POST["uyefirmatelefonno"];
      $uyefirmailgilisahis=$_POST["uyefirmailgilisahis"];
       $uyefirmacalisansayisi=$_POST["uyefirmacalisansayisi"];
       $uyefirmaozetbilgi1=$_POST["uyefirmaozetbilgi1"];
        
 	$queryResult=mysqli_query($connect,"update uyefirmabilgi set uyefirmaunvani='".$uyefirmaunvani."',uyefirmaadres='".$uyefirmaadres."',uyefirmaeposta='".$uyefirmaeposta."',uyefirmasifre='".$uyefirmasifre."',uyefirmasehir='".$uyefirmasehir."',uyefirmavergino='".$uyefirmavergino."',uyefirmavergidairesi='".$uyefirmavergidairesi."',uyefirmatelefonno='".$uyefirmatelefonno."',uyefirmailgilisahis='".$uyefirmailgilisahis."',uyefirmacalisansayisi='".$uyefirmacalisansayisi."',uyefirmaozetbilgi1='".$uyefirmaozetbilgi1."'   where uyefirmano='".$id."'");


?>