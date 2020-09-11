<?php
include "component/baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için

	// biryere tıklamadan bu sayfaya ulaşırsa onu direk anasayfaya yönlendir
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
		<title>İlan Ver</title>
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
								<?php
									$sql = "select * from uyefirmabilgi where uyefirmano='".$_SESSION["id"]."'";
									$sorgu=mysqli_query($baglan,$sql);
									while( $sonuc=mysqli_fetch_assoc($sorgu))
									{
								?>
								<form class="modal-content1 animate" action="" method="post" enctype="multipart/form-data">
									<div class="imgcontainer">
										<label for="uname"><b>İlan Ver</b></label>
									</div>

									<div class="container">
										<label ><b>Firma Ünvanı</b></label>
										<input type="text" class="form-control" required placeholder="<?php echo $_SESSION['unvan']; ?>" name="unvan"   maxlength="25" disabled>


										<label ><b>Meslek Ünvan</b></label>
										<input type="text" required class="form-control" placeholder="Meslek Giriniz" name="meslekunvan"   maxlength="25">

										<label ><b>Eğitim Durumu</b></label>
										<select name="egitimdurumu" class="form-control" style="margin-top: 5px;">							 
												 <option value="ortaokul">Ortaokul</option>
												 <option value="lise">Lise</option>
												 <option value="üniversite">Üniversite</option>
										</select>

										<label ><b>Askerlik Durumu</b></label>
										<select name="askerlikdurumu" class="form-control" style="margin-top: 5px;">							 
												 <option value="Boş">Boş</option>
												 <option value="askerliği bitirmiş">Askerliği Bitirmiş</option>
												 <option value="tecil">Tecil</option>
												 <option value="+1 tecil">+1 Tecil</option>
												 <option value="+2 tecil">+2 Tecil</option>
										</select>

										<label ><b>Cinsiyet</b></label><br>
										<input type="radio" name="cinsiyet"   value="bay"/>Bay<br/>
										<input type="radio" name="cinsiyet" value="bayan"/>Bayan<br/>
										<input type="radio" name="cinsiyet" checked value="farketmez" select />Farketmez<br/>
										 
										<label ><b>Yaş Sınırı</b></label>
										<input type="text" required class="form-control" placeholder="Yaş Sınırı Giriniz" name="yassiniri"   maxlength="25">



										<label ><b>Şehir</b></label>
										<select name="sehirler" class="form-control" style="margin-top: 5px;" onfocus='this.size=7;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>							 
												<?php
													include "component/sehirler.php";
												?>
										</select>


										<label ><b>İş Çalışma Saatleri</b></label>
										<input type="text" required class="form-control" placeholder="İş Çalışma Aralığı Giriniz" name="calismasaati"   maxlength="25">

										<label ><b>İş Lokasyonu</b></label>
										<input type="text" required class="form-control" placeholder="İş Lokasyonuz Giriniz" name="islokasyon"   maxlength="75" >

										 
										<label ><b>Maaş Aralığı</b></label>
										<input type="text" required class="form-control" placeholder="Maaş Aralığı Giriniz" name="maasaraligi"   maxlength="25" >

										<label ><b>İş Tecrübe Yılı Giriniz</b></label>
										<input type="text" required class="form-control" placeholder="İş Tecrübe Yılı Giriniz" name="istecrubeyili"   maxlength="25" >

										<label ><b>İş Başvuru Başlama Tarihi</b></label>
										<input type="text" required class="form-control" value="<?php echo date('Y-m-d'); ?>" name="baslamatarihi"   maxlength="25" >   

										<label ><b>İş Başvuru Bitiş Tarihi</b></label>
										<input type="date" required class="form-control" placeholder="Bitiş Tarihini Giriniz" name="bitistarihi"   maxlength="25" > 
										  

										<label ><b>İş Açıklama</b></label><br>
										<textarea id="aciklama" required name="aciklama" rows="4" cols="40" maxlength="180">
										</textarea><br>


										<label ><b>İş İlan Notları</b></label><br>
										<textarea id="notlar" required name="notlar" rows="4" cols="40" maxlength="180">
										</textarea><br>

										<label ><b>İlan Türü</b></label>
										<select name="tur" class="form-control" style="margin-top: 5px;margin-bottom: 5px;">
												 <option value="Acil İş İlanı" selected>Acil İş İlanı</option>
												 <option value="Part Time İlan" >Part Time İlan</option>
												 <option value="Staj İlan">Staj İlan</option>
												 <option value="Freelance İlan">Freelance İlan</option>
												 <option value="Engelli İş İlanı">Engelli İş İlanı</option>
												 <option value="Normal İş İlanı">Normal İş İlanı</option>
										</select>


										<button type="submit" class="loginbuton" name="ilanver" onclick="uyeol()" style="width: 100%;">İLAN VER</button>
										<input type="hidden" name="gizli" value="<?php echo $sonuc['uyefirmaresim2']; ?>">
									</div>
									<span>
										<?php
											}
										  $id=$_SESSION["id"];
										  $unvan=$_SESSION["unvan"];
											if (isset($_POST["ilanver"])) 
											{	


													$sql1="INSERT INTO uyefirmaisilanbilgi(uyefirmano,uyefirmaunvani,isegitimdurum,isaskerlikdurum,iscinsiyet,isyassiniri,issaatleri,islokasyonu,issehir,ismaasi,istecrubeyil,isbasvurubaslamatarihi,isbasvurubitistarihi,isaciklamasi,isilannotlari,meslek,resim,tur) VALUES ('".$_SESSION["id"]."','".$_SESSION["unvan"]."','".$_POST["egitimdurumu"]."','".$_POST["askerlikdurumu"]."','".$_POST["cinsiyet"]."','".$_POST["yassiniri"]."','".$_POST["calismasaati"]."','".$_POST["islokasyon"]."','".$_POST["sehirler"]."','".$_POST["maasaraligi"]."','".$_POST["istecrubeyili"]."','".$_POST["baslamatarihi"]."','".$_POST["bitistarihi"]."','".$_POST["aciklama"]."','".$_POST["notlar"]."','".$_POST["meslekunvan"]."','".$_POST["gizli"]."','".$_POST["tur"]."')";
																		$sonuc1=mysqli_query($baglan,$sql1);
																		if ($sonuc1) {


																			echo "<script>alert('İlan yayınlama başarılı');</script>";
																			header("Refresh:1,url=ilanlarim.php");
																		}
																		else
																		{
																			echo "<script>alert('İlan yayınlarken hata oluştu');</script>";

																		}												 
 
																		
 
 
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