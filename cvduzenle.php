<?php
include "component/baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için
		$referer = $_SERVER['HTTP_REFERER'];  

if ($referer == "")  
{  
 header("Location:index.php");
}  
else  
{  

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<!-- Buraya META etiketleri ekle -->
		<title>CV Düzenle</title>
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
				<section>
					<a name="git"></a>
					<div class="container main-kisiler-hover" style="margin-top:20px;">
								<?php
								 
									$sql="select * from uyecvbilgi where uyecvno='".$_SESSION["id"]."'";
									$result=mysqli_query($baglan,$sql);
									$sonuc = mysqli_fetch_assoc($result);
									if(mysqli_num_rows($result) == 1)
									{
								?>
						<div class="row">
							<div class="col-md-4">
								<figure>
									<img src="<?php echo $sonuc['uyecvresim2']; ?>" class="card-img-top">
								</figure>
							</div>
							<div class="col-md-8 modal-content animate" style="margin: 0% auto 2% auto;">
								<form  action="" method="post" enctype="multipart/form-data">
										<label ><h3>Resim Değiştirme</h3></label>
										<p>		
											<input type="file" name="resim" id="resim" required>
										</p>
										<button type="submit" class="loginbuton" name="resimGuncelle">Resim Güncelle</button>
										<hr>
										<strong>CV Görüntüle</strong>
										<a href="cvgoster.php?id=<?php echo $_SESSION['id'];?>#git" target="_blank">
											<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h8a1.5 1.5 0 0 0 1.5-1.5V9a.5.5 0 0 0-1 0v4a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 5v8zm7-11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.5H9a.5.5 0 0 1-.5-.5z"/>
											  <path fill-rule="evenodd" d="M14.354 1.646a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708l8-8a.5.5 0 0 1 .708 0z"/>
											</svg>
										</a>
								</form>
								<?php
									if (isset($_POST["resimGuncelle"])) {
									  
									  		$uzanti= array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
											$dizin= "images/kisiler";
											$sayi1 = rand();

											if(in_array(strtolower($_FILES['resim']['type']),$uzanti)){
												move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/$sayi1{$_FILES['resim']['name']}");
										  		 $sorgu="update uyecvbilgi set 
										  	 	uyecvresim2='images/kisiler/$sayi1{$_FILES['resim']['name']}'
										  	 	where uyecvno='".$_SESSION["id"]."'";
										  		 $result=mysqli_query($baglan,$sorgu);
										  		 if($result)
										  		 {
										  		 	header("Location:cvduzenle.php");	
										  		 	 
										  		 }
										  		 else
										  		 {
										  		 	echo "<script>alert('Hata oluştu..Tekrar Deneyiniz...');</script>";

										  		 }
										  	}
										  	else
										  	{
											echo "<script>alert('resim eklerken hata oluştu');</script>";
											}

									  }


								?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" >	
								
								<form method="post" enctype="multipart/form-data" action="" class="p-3 animate" style="margin: 1% auto 10% auto;background-color: #fefefe;border: 1px solid #888;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
									<legend><h1>CV Düzenle/Kaydet</h1></legend>
									  <div class="form-row">
										    <div class="form-group col-md-4">
										      <label for="adsoyad"><h6>Ad Soyad*</h6></label>
										      <input type="text" class="form-control" name="adsoyad" required value="<?php echo $sonuc['uyecvadisoyadi'] ?>"  maxlength="35">
										    </div>
										    <div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>Tc No*</h6></label>
										      <input type="text" class="form-control" name="tcno" maxlength="11" required value="<?php echo $sonuc['uyecvtcno'] ?>">
										    </div>
										    <div class="form-group col-md-4">
										      <label for="adsoyad"><h6>Doğum Tarihi</h6></label>
										      <input type="date" id="dogtarihi" name="dogtarihi" class="form-control" value="<?php echo $sonuc['uyecvdogumtarihi'] ?>">
										    </div>
									  </div>
									  <div class="form-row">
										    <div class="form-group col-md-4">
									   			 <label for="inputAddress"><h6>E-Mail*</h6></label>
									   		 	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required maxlength="25" value="<?php echo $sonuc['uyecveposta'] ?>" disabled>
									  		</div>
										    <div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>Doğum Yeri*</h6></label>
										      <select name="dogyeri" class="form-control" required>							 
												<?php
													include "component/sehirler.php";
												?>
											</select>
										    </div>
										    <div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>Telefon*</h6></label>
										      <input type="text" class="form-control" name="tel" maxlength="14" required value="<?php echo $sonuc['uyecvtelefonno'] ?>">
										    </div>
									  </div>
									  <div class="form-row">
										    <div class="form-group col-md-6">
										      <label for="adsoyad"><h6>Baba Adı</h6></label>
										      <input type="text" class="form-control" name="babaadi" value="<?php echo $sonuc['uyecvbabaadi'] ?>"  maxlength="15">
										    </div>
										    <div class="form-group col-md-6">
										      <label for="inputPassword4"><h6>Anne Adı</h6></label>
										      <input type="text" class="form-control" name="anneadi" value="<?php echo $sonuc['uyecvanaadi'] ?>"  maxlength="15">
										    </div>
									  </div>
									  <div class="form-row">
										    <div class="form-group col-md-6">
										   		 <label for="inputAddress2"><h6>Adres*</h6></label><br>
										   		 <textarea id="adres" required name="adres" rows="4" cols="40" maxlength="180"><?php echo $sonuc['uyecvadresi'];?></textarea>
									 		 </div>
										    <div class="form-group col-md-6">
										      <label for="inputPassword4"><h6>Kaldığınız Şehir*</h6></label>
										      <select name="sehirler" class="form-control"  required>							 
												<?php
													include "component/sehirler.php";
												?>
											</select>
										    </div>
									  </div>
									  <div class="form-row">
									  		<div class="form-group col-md-4">
										   		 <label for="inputAddress2"><h6>Mesleğiniz*</h6></label><br>
										   		<input type="text" class="form-control" name="meslek" required value="<?php echo $sonuc['uyecvmeslekunvani'] ?>"  maxlength="25">
									 		 </div>
										    <div class="form-group col-md-4">
										   		 <label for="inputAddress2"><h6>Son Mezun Olunan Okul</h6> </label><br>
										   		<input type="text" class="form-control" name="sonokul" value="<?php echo $sonuc['uyecvsonmezunokul'] ?>"  maxlength="55">
									 		 </div>
										    <div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>Son Mezun Olunan Bölüm</h6></label>
										      <input type="text" class="form-control" name="sonbolum" value="<?php echo $sonuc['uyecvsonmezunbolum'] ?>" maxlength="35">
										    </div>
									  </div>
									  <div class="form-row">
									  	<div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>Eğitim Seviyesi</h6></label>
										      	<select name="egitimdurumu" class="form-control" style="margin-top: 5px;">							 
												 <option value="ortaokul" <?php if($sonuc["uyeecvgitimseviye"]=="ortaokul") echo "selected"?>>Ortaokul</option>
												 <option value="lise" <?php if($sonuc["uyeecvgitimseviye"]=="lise") echo "selected"?>>Lise</option>
												 <option value="üniversite" <?php if($sonuc["uyeecvgitimseviye"]=="üniversite") echo "selected"?>>Üniversite</option>
												 <option value="yükseklisans" <?php if($sonuc["uyeecvgitimseviye"]=="yükseklisans") echo "selected"?>>Yüksek Lisans</option>

												</select>
										    </div>
										    <div class="form-group col-md-4">
										   		 <label for="inputAddress2"><h6>En Son Çalışılan İş(1)</h6></label><br>
										   		<input type="text" class="form-control" name="sonis1" value="<?php echo $sonuc['uyecvsoncalisilanis1'] ?>" maxlength="55">
									 		 </div>
										    <div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>En Son Çalışılan İş(2)</h6></label>
										      <input type="text" class="form-control" name="sonis2" value="<?php echo $sonuc['uyecvsoncalisilanis2'] ?>" maxlength="55">
										    </div>
									  </div>
 
									   
									    
									  <div class="form-row">
										    <div class="form-group col-md-6">
										   		 <label for="inputAddress2"><h6>En Son İş Ayrılma Sebebi</h6></label><br>
										   		<textarea id="ayrilmasebebi" name="ayrilmasebebi" rows="4" cols="40" maxlength="180" ><?php echo $sonuc['uyecvsonisayrilmasebebi'];?></textarea>
									 		 </div>
									 		 <div class="form-group col-md-6">
										   		 <label for="inputAddress2"><h6>CV Özet Bilgi</h6></label><br>
										   		 <textarea id="ozetbilgi" name="ozetbilgi" rows="4" cols="40" maxlength="180" ><?php echo $sonuc['uyecvozetbilgi1'];?></textarea>
									 		 </div>
										    
									  </div>
									  <div class="form-row">
										    <div class="form-group col-md-6">
										   		 <!-- <label for="inputAddress2">Resim</label><br>
										   		 <input type="file" name="resim" id="resim"> -->
									 		 </div>
									 		 <div class="form-group col-md-6">
										      <label for="inputPassword4"><h6>En Son Çalışılan İş Ayrılma Tarihi</h6></label>
										      <input type="date" id="birthday" name="ayrilmatarihi" class="form-control" value="<?php echo $sonuc['uyecvsonisayrilmatarihi'] ?>">
										    </div>
									  </div>
									  <button type="submit" class="loginbuton" name="kaydetguncelle">Kaydet/Güncelle</button>
									 <?php
									  }
									  	
									  if (isset($_POST["kaydetguncelle"])) {
									  
										  	 $sorgu="update uyecvbilgi set 
										  	 uyecvadisoyadi='".$_POST["adsoyad"]."',
										  	 uyecvtcno='".$_POST["tcno"]."',
										  	 uyecvdogumtarihi='".$_POST["dogtarihi"]."',
										  	 uyecvdogumyeri='".$_POST["dogyeri"]."',
										  	 uyecvanaadi='".$_POST["anneadi"]."',
										  	 uyecvbabaadi=	'".$_POST["babaadi"]."',
										  	 uyecvadresi='".$_POST["adres"]."',
										  	 uyecvsehir='".$_POST["sehirler"]."',
										  	 uyecvtelefonno='".$_POST["tel"]."',
										  	 uyecvsonmezunokul='".$_POST["sonokul"]."',
										  	 uyecvsonmezunbolum='".$_POST["sonbolum"]."',
										  	 uyecvsoncalisilanis1='".$_POST["sonis1"]."',
										  	 uyecvsoncalisilanis2='".$_POST["sonis2"]."',
										  	 uyecvmeslekunvani='".$_POST["meslek"]."',
										  	 uyeecvgitimseviye='".$_POST["egitimdurumu"]."',
										  	 uyecvozetbilgi1='".$_POST["ozetbilgi"]."',
										  	 uyecvsonisayrilmasebebi='".$_POST["ayrilmasebebi"]."',
										  	 uyecvsonisayrilmatarihi= '".$_POST["ayrilmatarihi"]."'


										  	 where uyecvno='".$_SESSION["id"]."'";
										  	 $result=mysqli_query($baglan,$sorgu);
										  	 if($result)
										  	 {
										  	 	header("Location:cvduzenle.php");	
										  	 	 
										  	 }
										  	 else
										  	 {
										  	 	echo "başarısız..";

										  	 }

									  }


									 ?>
								</form>
									
							</div>	
						</div>
 
				</div>
			</section>

		<!-- İşlem Başarılı olunca burası açılsın -->
		<div id="islemBasarili" class="modal">
			  <form class="modal-content animate" action="" method="post">
				    <div class="container">
							<label><b>Çıkış Yapmak İstiyor musunuz?</b></label>
				    </div>

				    <div class="container" style="background-color:#f1f1f1">
				      	<button type="submit" class="cancelbtn loginbuton" style="background-color: green;" name="evet">Evet</button>
				      	<button type="button" onclick="document.getElementById('islemBasarili').style.display='none'" class="cancelbtn loginbuton">Cancel</button>
				    </div>

			  </form>
		</div>



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
}
ob_end_flush();
mysqli_close($baglan);
?>