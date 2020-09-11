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
		<title>Üye Ol</title>
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
					<div class="container-fluid icerik">
						<div class="row">
							<div class="col-md-12">
								<a name="git"></a>
								<form class="modal-content1 animate" action="" method="post" enctype="multipart/form-data">
									<div class="imgcontainer">
										<label for="uname"><b>Üye Ol</b></label>
									</div>

									<div class="container">
										<label ><b>Ad</b></label>
										<input type="text" class="form-control" placeholder="İsim Giriniz" name="ad" required maxlength="35">

										<label ><b>Soyad</b></label>
										<input type="text" class="form-control" placeholder="Soyisim Giriniz" name="soyad" required maxlength="15">

										<label ><b>Telefon</b></label>
										<input type="text" class="form-control" placeholder="Telefon Giriniz" name="tel" required maxlength="14">

										<label ><b>E-Mail</b></label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Mail Giriniz" name="mail" required maxlength="35">

										<label ><b>Şehir</b></label>
										<select name="sehirler" class="form-control" style="margin-top: 5px;" onfocus='this.size=7;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>							 
												<?php
													include "component/sehirler.php";
												?>
											</select>
										<label ><b>Resim</b></label>		
										<input type="file" name="resim" id="resim" required> <br>
										<label ><b>Gizli Soru</b></label>
										<select name="gizlisoru" class="form-control" style="margin-top: 5px;" required>			<option value="İlk evcil hayvanınızın adı nedir?">İlk evcil hayvanınızın adı nedir?</option>
											<option value="İlk aracınızın modeli nedir?">İlk aracınızın modeli nedir?</option>
											<option value="Hangi şehirde doğdunuz?">Hangi şehirde doğdunuz?</option>
											<option value="Babanızın ortanca ismi nedir?">Babanızın ortanca ismi nedir?</option>
											<option value="Çocukluk lakabınız nedir?">Çocukluk lakabınız nedir?</option>
											<option value="İlkokul Öğretmeniniz?">İlkokul Öğretmeniniz?</option>
										 
										</select>
										<label ><b>Gizli Soru Cevap</b></label>
										<input type="text" class="form-control" placeholder="Cevabınız..." name="gizli" required maxlength="24">
										<label ><b>Şifre</b></label>
										<input type="password" placeholder="Şifre Giriniz" name="sifre" required maxlength="15">

										<label ><b>Şifre(tekrar)</b></label>
										<input type="password" placeholder="Şifre Giriniz(tekrar)" name="sifre_tekrar" required maxlength="15">    

										<button type="submit" class="loginbuton" name="uyeol" onclick="uyeol()" style="width: 100%;">Üye Ol</button>
									</div>
										<span>
											<?php
						$adsoyad=$_POST["ad"]." ".$_POST["soyad"];
						if (isset($_POST["uyeol"])) 
						{
							$sql1="select * from uyecvbilgi where uyecveposta ='".$_POST["mail"]."'";
							$result1=mysqli_query($baglan,$sql1);
							if(mysqli_num_rows($result1) == 1)
							{
								echo "<script>alert('Bu Mail Kayıtlıdır...');</script>";
								echo "<span style='color:red;'>Mail Kayıtlı</span>";
							}
							else
							{
									if($_POST["sifre"]==$_POST["sifre_tekrar"])
									{
										$uzanti= array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
										$dizin= "images/kisiler";
										$sayi1 = rand();
										 
										$seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'.'0123456789');
										 shuffle($seed);
										 $hrand = '';
										 foreach (array_rand($seed, 5) as $k) $hrand .= $seed[$k];
										if(in_array(strtolower($_FILES['resim']['type']),$uzanti)){
											//move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/$sayi1{$_FILES['resim']['name']}");
											//compressImage($_FILES['resim']['tmp_name'],$dizin."/$sayi1$hrand".$_FILES['resim']['name'],60);
											$info = getimagesize($_FILES['resim']['tmp_name']);
											  if ($info['mime'] == 'image/jpeg') 
											    $image = imagecreatefromjpeg($_FILES['resim']['tmp_name']);
											 
											  elseif ($info['mime'] == 'image/gif') 
											    $image = imagecreatefromgif($_FILES['resim']['tmp_name']);
											 
											  elseif ($info['mime'] == 'image/png') 
											    $image = imagecreatefrompng($_FILES['resim']['tmp_name']);
											 
											 imagejpeg($image, $dizin."/$sayi1$hrand".$_FILES['resim']['name'], 60);
											 //
											$sql="INSERT INTO uyecvbilgi(uyecvadisoyadi,uyecvtelefonno ,uyecveposta,uyecvsehir,uyecvsifre,uyecvresim2,gizlisoru,yanit) VALUES ('$adsoyad','".$_POST["tel"]."','".$_POST["mail"]."','".$_POST["sehirler"]."','".$_POST["sifre"]."','images/kisiler/$sayi1$hrand{$_FILES['resim']['name']}','".$_POST["gizlisoru"]."','".$_POST["gizli"]."')";
											$sonuc=mysqli_query($baglan,$sql);
											if ($sonuc) {


												echo "<script>document.getElementById('uye-giris').style.display='block';document.getElementById('giris').style.display='block';</script>";
											}
											else
											{
												echo "<script>alert('hata oluştu tekrar deneyiniz');</script>";

											}
										}else{
											echo "<script>alert('resim eklerken hata oluştu');</script>";
										}
											
									}
									else
									{
										echo "<script>window.onload = function() {
											document.getElementById('sifrelerUyusmuyor').style.display='block';
										}
										</script>";
									}
								}
						}
						function compressImage($source, $destination, $quality) {
								 
								  $info = getimagesize($source);
								 
								  if ($info['mime'] == 'image/jpeg') 
								    $image = imagecreatefromjpeg($source);
								 
								  elseif ($info['mime'] == 'image/gif') 
								    $image = imagecreatefromgif($source);
								 
								  elseif ($info['mime'] == 'image/png') 
								    $image = imagecreatefrompng($source);
								 
								 imagejpeg($image, $destination, $quality);
								}
						?>
										</span>
								</form>
							</div>
						</div>
					</div>
				</section>
				<section>


					<div class="basarili" id="sifrelerUyusmuyor">
						<div class="basarili-icerik">
							<div class="container">
								<label for="uname"><b>İşlem Başarısız</b></label> <br>
								<button type="submit" class="loginbuton" name="giris" onclick="document.getElementById('sifrelerUyusmuyor').style.display='none'" style="background-color: red;">Şifreler uyuşmuyor.</button>
							</div>
						</div>
					</div>
				</section>

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