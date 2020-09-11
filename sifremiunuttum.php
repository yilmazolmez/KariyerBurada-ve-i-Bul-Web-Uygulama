<?php
	include "component/baglanti.php";
	include 'phpmail/class.phpmailer.php';
	error_reporting(0); //hataları görmezden gelmek için
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Buraya META etiketleri ekle -->
	<title>Şifremi Unuttum</title>
	<?php
	include "component/css/css.php";
	?>
	<?php
	include "component/meta/metatag.php";
	?>

</head>
<body>
	
	<header>
		<?php include "component/header.php"; ?>
	</header>


	<main>
		<article>
			 					<a name="git"></a>
								<form class="modal-content1 animate" action="" method="post" enctype="multipart/form-data">
									<div class="imgcontainer">
										<label for="uname"><b>Şifremi Unuttum</b></label>
									</div>

									<div class="container">
										<label ><b>Mail Adresiniz</b></label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Mail Giriniz" name="mail" required maxlength="35">
										<label ><b>Gizli Sorunuzun Cevabı</b></label>
										<input type="text" class="form-control" placeholder="Cevabınız..." name="cevap" required maxlength="45">
 
									 

										<button type="submit" class="loginbuton" name="sifregonder" onclick="uyeol()" style="width: 100%;margin-top: 10px;">Şifre Gönder</button>
									</div>
 								<div class="container">
 									  <?php 
 									  if ($_GET["iletisimgonder"]) {
													echo "<span style=color:green;font-size:16px;>Şifreniz mail adresinize gönderildi.</span>";
 									  	 
 									  }
 	 										if (isset($_POST["cevap"])) {
 	 											 $email = htmlspecialchars(trim($_POST['mail'])); 												
												 $cevap = htmlspecialchars(trim($_POST['cevap'])); 

												$adsoyad="KariyerBurada";	

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
												 
													$mail = new PHPMailer();
													$mail->IsSMTP();

													$mail->SMTPAuth = true;
													$mail->Host = 'smtp.gmail.com';
													$mail->Port = 587;
													$mail->SMTPSecure = 'tls';
													$mail->Username = 'kariyerburadatest@gmail.com';
													$mail->Password = 'Ym2020202000';

													$mail->SetFrom($mail->Username, $adsoyad);
													 
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

														header("Location:sifremiunuttum1.php?iletisimgonder=ok");
													} 
													else {
														echo $mail->ErrorInfo;
															// bir sorun var, sorunu ekrana bastıralım
														header("Location:sifremiunuttum1.php?iletisimgonder=no");
													}
												}
												else if(mysqli_num_rows($r2) == 1)
												{
													$s="select * from uyecvbilgi where uyecveposta='".$email."'";
													$r=mysqli_query($baglan,$s);
													$s = mysqli_fetch_assoc($r);
													$sifre1=$s['uyecvsifre'];
													 
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

														header("Location:sifremiunuttum.php?iletisimgonder=ok");
														echo "string";
													} 
													else {
														echo $mail->ErrorInfo;
															// bir sorun var, sorunu ekrana bastıralım
														header("Location:sifremiunuttum.php?iletisimgonder=no");
													}	 
												}
												else
												{
													echo "<span style=color:red;font-size:16px;>Bilgiler hatalıdır. Kontrol ediniz</span>";
												}
	
								
 }
 
 									?> 
 								</div>
								</form>
			 
			 
		</article>
	</main>


	<footer>
		<?php
			include "component/footer.php";
		?>
	</footer>

	<?php
		include "component/js/js.php";
	?>

	</body>
	</html>

<?php 
	 ob_end_flush();
	 mysqli_close($baglan);
?>