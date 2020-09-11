<?php
	include "../baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için
	$referer = $_SERVER['HTTP_REFERER'];  

if ($referer == "")  
{  
 header("Location:../../cpanel.php");
}  
else  
{ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>İlan Detay</title>
	<?php
		include "../css/css.php";
  	?>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

  	<div class="wrapper d-flex align-items-stretch">
				<nav id="sidebar">
					<div class="custom-menu">
						 <button type="button" id="sidebarCollapse" class="btn btn-primary">
				          <i class="fa fa-bars"></i>
				          <span class="sr-only">Toggle Menu</span>
				        </button>
			        </div>
				  		<h1><a href="index.php" class="logo">Kariyer Burada Cpanel</a></h1>
			        <ul class="list-unstyled components mb-5">
			          <li class="active">
			            <a href="index.php"><span class="fa fa-home mr-3"></span> Anasayfa</a>
			          </li>
			          <li>
			              <a href="uyeler.php"><span class="fa fa-user mr-3"></span> Üyeler</a>
			          </li>
			          <li>
			            <a href="firmalar.php"><span class="fa fa-users mr-3"></span> Firmalar</a>
			          </li>
			          <li>
			            <a href="ilanlar"><span class="fa fa-file-text mr-3"></span> İlanlar</a>
			          </li>
			          <li>
			            <a href="index.php#git"><span class="fa fa-sticky-note mr-3"></span> Uygulama Log</a>
			          </li>
			          <li>
			            <a href="uygulamabilgi.php"><span class="fa fa-paper-plane mr-3"></span> Uygulama Bilgi</a>
			          </li>
			          
			          <li style="">
			            <a href="../../index.php"><span class="fa fa-sign-out mr-3"></span> ÇIKIŞ</a>
			          </li>
			        </ul>

	    	</nav>
  			 
	        <!-- Page Content  -->
		      <div 	class="container p-4 p-md-5 pt-5">
 
			     	 <section>
					<a name="git"></a>
					<div class="container main-kisiler-hover" style="margin-top:20px;">
								<?php
								 	$idimiz=$_GET["id"];
									$sql="select * from uyefirmaisilanbilgi where isilanno='".$_GET["id"]."'";
									$result=mysqli_query($baglan,$sql);
									$sonuc = mysqli_fetch_assoc($result);
									if(mysqli_num_rows($result) == 1)
									{
								?>
						<div class="row">
							<div class="col-md-12">	
								<a name="git"></a>
								<form method="POST" action="#" class="p-3 animate"  style="margin: 1% auto 10% auto;background-color: #fefefe;border: 1px solid #888;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);border-radius: 10px;">
									
									<div class="form-row">
										    <div class="form-group col-md-8">
										      	<legend><h1><?php echo $sonuc['uyefirmaunvani'] ?></h1></legend>
										    </div>
										    <div class="form-group col-md-4">
 
										    </div>
									</div>
									<div class="form-row" style="border-bottom: 1px dashed black;margin-bottom: 10px;">

										    <div class="form-group col-md-4">
										      	 <figure>
													<img src="<?php echo '../../'.$sonuc['resim']; ?>" class="card-img-top">
													<p style="margin-top: 5px;">Başvuru Başlangıç : <b><?php echo $sonuc['isbasvurubaslamatarihi'] ?></b></p>
													<p>Başvuru Bitiş : <b><?php echo $sonuc['isbasvurubitistarihi'] ?></b></p>
												 </figure>
										    </div>
										    <div class="form-group col-md-8">
										    	<div class="row">
										    		<div class="col-md-6">
										    			<p>
													      <label for="anaadi"><b>Aranan Meslek</b></label><br>
										      			  <label  name="anaadi" class="cv-etiket"><?php echo $sonuc['meslek'] ?></label>
												     	</p>
														<p>
													      <label for="meslek"><b>İş Eğitim Durumu</b></label><br>
													      <label  name="meslek" class="cv-etiket"><?php echo $sonuc['isegitimdurum'] ?></label>
												        </p>
												        <p>
													      <label for="tur"><b>İlan Türü</b></label><br>
													      <label  name="tur" class="cv-etiket"><?php echo $sonuc['tur'] ?></label>
												        </p>
										    		</div>
										    		<div class="col-md-6">
										    			<p>
													       <label for="dogTar"><b>Cinsiyet</b></label><br>
													       <label  name="dogTar" class="cv-etiket"><?php echo $sonuc['iscinsiyet'] ?></label>
													    </p>
													    <p>
													      <label for="dogyer"><b>Yaş Sınırı</b></label><br>
													      <label  name="dogyer" class="cv-etiket"><?php echo $sonuc['isyassiniri'] ?></label>
												     	</p>
												     	<p>
													      <label for="tcNo"><b>Askerlik Durumu</b></label><br>
													      <label  name="tcno" class="cv-etiket" ><?php echo $sonuc['isaskerlikdurum'] ?></label>
													    </p>
										    		</div>
										    		
										    	</div>										    
										    </div>

										    
									  </div>

									  <div class="form-row">
										    <div class="form-group col-md-4">
										    		<div class="row">
										    		<div class="col-md-12">

													    <p>
													       <label for="babaadi"><b>Şehir</b></label><br>
										     			   <label  name="babaadi" class="cv-etiket"><?php echo $sonuc['issehir'] ?></label>
													    </p>
													    <p>
													   		<label for="tel"><b>Lokasyon</b></label><br>
										      				<label  name="tel" class="cv-etiket"><?php echo $sonuc['islokasyonu'] ?></label>
													    </p>
														<p>
													      <label for="mail"><b>Çalışma Saatleri</b></label><br>
										     			  <label  name="mail" class="cv-etiket"><?php echo $sonuc['issaatleri'] ?></label>
												        </p>
												        
										    		</div>
										    	</div>
										    </div>
										    
										    <div class="form-group col-md-4">
										    	<p>
										    		<label for="adres"><b>Maaş</b></label><br>
										     		<label  name="adres" class="cv-etiket"><?php echo $sonuc['ismaasi'] ?></label>
												</p>
												<p>
										     		<label for="kaldigisehir"><b>Tecrübe Yıl</b></label><br>
										     		 <label  name="kaldigisehir" class="cv-etiket"><?php echo $sonuc['istecrubeyil'] ?></label>
										     	 </p>
										    </div>
										    <div class="form-group col-md-4">
										    				 <p>
													     		<label for="ayrilmetarih"><b>İş Açıklaması</b></label><br>
													     		<label  name="ayrilmetarih" class="cv-etiket"><?php echo $sonuc['isaciklamasi'] ?></label>
													     	 </p>
													     	 <p>
													     		<label for="ayrilmasebep"><b>İlan Notları</b></label><br>
													      		<label  name="ayrilmasebep" class="cv-etiket"><?php echo $sonuc['isilannotlari'] ?></label>
													     	 </p>
										    </div>
									  </div>					  
									  <hr>
									  <?php
									  	$sql123="select count(*) as toplam from uyefirmaisilanbasvurubilgi where isilanno='".$_GET["id"]."'";
										$result123=mysqli_query($baglan,$sql123);
										$sonuc123 = mysqli_fetch_assoc($result123);										
										if(mysqli_num_rows($result123) == 1)
										{
									  ?>
									 	<div class="row">
											<div class="col-md-12">
												<span style="float: right;"><b>Şuanda <?php echo $sonuc123["toplam"]; ?> kişi başvuru yaptı...</b></span>
											</div>
										</div>
										<?php
											}
										?>
										<input type="hidden" name="uyefirmano" value="<?php echo $sonuc['uyefirmano']; ?>">
 
									 <?php
									 			$tarih_bugunun=date('Y-m-d');
											 if (isset($_POST["basvur"]))
											  {
											  	$sql="insert into uyefirmaisilanbasvurubilgi(isilanno,uyecvno,uyefirmano,uyefirmaunvani,uyecvadisoyadi,isaciklamasi,basvurunotlari,basvurutarihi,meslek)values('".$_GET["id"]."','".$_SESSION["id"]."','".$_POST["uyefirmano"]."','".$sonuc['uyefirmaunvani']."','".$_SESSION["adsoyad"]."','".$sonuc['isaciklamasi']."','".$sonuc['isilannotlari']."','".$tarih_bugunun."','".$sonuc['meslek']."')";
											  	$result=mysqli_query($baglan,$sql);
											  	if ($result) {
											  		echo "<script>alert('Başvurunuz Alınmıştır.Teşekkür Ederiz :) ');</script>";
											  		 header("Refresh:1,url=basvurulanilanlar.php#git");
											  	}
											  	else{
											  		echo "<script>alert('HATA OLUŞTU. TEKRAR DENEYİNİZ.');</script>";
											  	}

											  }
									  }
									  		

									  

									  

									 ?>
								</form>
								 
								 
							</div>	
						</div>
 
				</div>
			</section>
		     </div>
	</div>
	<?php
		include "../js/js.php";
  	?>
    <script src="js/main.js"></script>
</body>
</html>

<?php

}
ob_end_flush();
mysqli_close($baglan);
?>