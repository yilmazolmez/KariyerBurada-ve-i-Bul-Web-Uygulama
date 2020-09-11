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
		<title>Firma Profili</title>
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
								 
									$sql="select * from uyefirmabilgi where uyefirmano='".$_SESSION["id"]."'";
									$result=mysqli_query($baglan,$sql);
									$sonuc = mysqli_fetch_assoc($result);
									if(mysqli_num_rows($result) == 1)
									{
								?>
						<div class="row">
							<div class="col-md-4">
								<figure>
									<img src="<?php echo $sonuc['uyefirmaresim2']; ?>" class="card-img-top">
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
										 
								</form>
								<?php
									if (isset($_POST["resimGuncelle"])) {
									  
									  		$uzanti= array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
											$dizin= "images/firmalar";
											$sayi1 = rand();

											if(in_array(strtolower($_FILES['resim']['type']),$uzanti)){
												move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/$sayi1{$_FILES['resim']['name']}");
										  		 $sorgu="update uyefirmabilgi set 
										  	 	uyefirmaresim2='images/firmalar/$sayi1{$_FILES['resim']['name']}'
										  	 	where uyefirmano='".$_SESSION["id"]."'";
										  		 $result=mysqli_query($baglan,$sorgu);
										  		 if($result)
										  		 {
										  		 	header("Location:firmaprofili.php");	
										  		 	 
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
									<legend><h1>Firma Profili</h1></legend>
									  <div class="form-row">
										    <div class="form-group col-md-4">
										      <label for="unvan"><h6>Ünvan*</h6></label>
										      <input type="text" class="form-control" name="unvan" required value="<?php echo $sonuc['uyefirmaunvani'] ?>"  maxlength="35">
										    </div>
										    <div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>Telefon*</h6></label>
										      <input type="text" class="form-control" name="tel" maxlength="14" required value="<?php echo $sonuc['uyefirmatelefonno'] ?>">
										    </div>
										     <div class="form-group col-md-4">
									   			 <label for="mail"><h6>E-Mail*</h6></label>
									   		 	 <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" name="mail" required maxlength="25" value="<?php echo $sonuc['uyefirmaeposta'] ?>" >
									  		</div>

										     
									  </div>
									  <div class="form-row">
										    <div class="form-group col-md-4">
										      <label for="adres"><h6>Adres</h6></label>
										      <input type="text" class="form-control" name="adres" maxlength="66" value="<?php echo $sonuc['uyefirmaadres'] ?>">
										    </div>
										      <div class="form-group col-md-4">
										      <label for="vergino"><h6>Firma Vergi No</h6></label>
										      <input type="text" class="form-control" name="vergino" value="<?php echo $sonuc['uyefirmavergino'] ?>"  maxlength="25">
										    </div>
										    <div class="form-group col-md-4">
										      <label for="vergidairesi"><h6>Firma Vergi Dairesi</h6></label>
										      <input type="text" class="form-control" name="vergidairesi" value="<?php echo $sonuc['uyefirmavergidairesi'] ?>"  maxlength="35">
										    </div>
										    
									  </div>
									 
									  <div class="form-row">
										     
										    <div class="form-group col-md-12">
										      <label for="sehir"><h6>Şehir*</h6></label>
										      <select name="sehirler" class="form-control"  required>							 
												<?php
													include "component/sehirler.php";
												?>
											</select>
										    </div>
									  </div>
									  <div class="form-row">
									  		<div class="form-group col-md-6">
										   		 <label for="ilgilikisi"><h6>Firma İlgili Şahıs</h6></label><br>
										   		<input type="text" class="form-control" name="ilgilikisi" required value="<?php echo $sonuc['uyefirmailgilisahis'] ?>"  maxlength="45">
									 		 </div>
										    <div class="form-group col-md-6">
										   		 <label for="calisansayisi"><h6>Firma Çalışan Sayısı</h6> </label><br>
										   		<input type="text" class="form-control" name="calisansayisi" value="<?php echo $sonuc['uyefirmacalisansayisi'] ?>"  maxlength="55">
									 		 </div>
										     
									  </div>
 
 
									   
									    
									  <div class="form-row">
										    <div class="form-group col-md-6">
										   		 <label for="ozet"><h6>Firma Özet Bilgi</h6></label><br>
										   		<textarea id="ozet" name="ozet" rows="4" cols="40" maxlength="180" ><?php echo $sonuc['uyefirmaozetbilgi1'];?></textarea>
									 		 </div>

									  </div>
 
									  <button type="submit" class="loginbuton" name="kaydetguncelle">Kaydet/Güncelle</button>
									 <?php
									  }
									  	
									  if (isset($_POST["kaydetguncelle"])) {
									  
										  	 $sorgu="update uyefirmabilgi set 
										  	 uyefirmaunvani ='".$_POST["unvan"]."',
										  	 uyefirmatelefonno='".$_POST["tel"]."',
										  	 uyefirmaeposta='".$_POST["mail"]."',
										  	 uyefirmaadres='".$_POST["adres"]."',
										  	 uyefirmasehir='".$_POST["sehirler"]."',
										  	 uyefirmailgilisahis='".$_POST["ilgilikisi"]."',
										  	 uyefirmacalisansayisi='".$_POST["calisansayisi"]."',
										  	 uyefirmaozetbilgi1='".$_POST["ozet"]."',
										  	 uyefirmavergino='".$_POST["vergino"]."',
										  	 uyefirmavergidairesi='".$_POST["vergidairesi"]."'
										  	 
										  	 where uyefirmano ='".$_SESSION["id"]."'";
										  	 $result=mysqli_query($baglan,$sorgu);
										  	 if($result)
										  	 {
										  	 	header("Location:firmaprofili.php");	
										  	 	 
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