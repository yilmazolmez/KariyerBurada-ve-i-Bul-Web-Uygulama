<?php 
 
 
	 
	

 												$s1="select * from uyefirmabilgi where uyefirmaeposta='".$email."' and yanit='".$cevap."'";
 	 											$s2="select * from uyecvbilgi where uyecveposta='".$email."' and yanit='".$cevap."'";
												$r1=mysqli_query($baglan,$s1);
												$r2=mysqli_query($baglan,$s2);
												if(mysqli_num_rows($r1) == 1)
												{
													$s="select * from uyefirmabilgi where uyefirmaeposta='".$email."'";
													$r=mysqli_query($baglan,$s);
													$s = mysqli_fetch_assoc($r);
													$sifre1=$s['uyefirmasifre'];
												}
												else if(mysqli_num_rows($r2) == 1)
												{
													$s="select * from uyecvbilgi where uyecveposta='".$email."'";
													$r=mysqli_query($baglan,$s);
													$s = mysqli_fetch_assoc($r);
													$sifre1=$s['uyecvsifre'];	 
												}
												else
												{
													echo "hatalııı";

												}
												 
	$adsoyad="KariyerBurada";										
	include 'class.phpmailer.php';
	$epostal='mustafa.altundag@turkcell.com.tr';
	$mail = new PHPMailer();
	$mail->IsSMTP();

	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->Username = 'kariyerburadatest@gmail.com';
	$mail->Password = 'Ym2020202000';

	$mail->SetFrom($mail->Username, $adsoyad);
	$mail->AddAddress($epostal, $adsoyad);
	$mail->AddAddress($email, $adsoyad);
	$mail->CharSet = 'UTF-8';
	$mail->Subject = 'Şifre Hatırlatma';
	$content = '
	<b>Şifre Hatırlatma Formu</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">

	<tr>
	<td class="tg-031e">Mailiniz</td>
	<td class="tg-031e">:</td>
	<td class="tg-031e">'.$email.'</td>
	</tr>
	<tr>
	<td class="tg-031e">Şifreniz</td>
	<td class="tg-031e">:</td>
	<td class="tg-031e">'.$sifre1.'</td>
	</tr>
	 
	</table>';

	$mail->MsgHTML($content);
	if($mail->Send()) {

		header("Location:../sifremiunuttum1.php?iletisimgonder=ok");
	} 
	else {
		echo $mail->ErrorInfo;
			// bir sorun var, sorunu ekrana bastıralım
		header("Location:../sifremiunuttum1.php?iletisimgonder=no");
	}
											 



 

 
?>

