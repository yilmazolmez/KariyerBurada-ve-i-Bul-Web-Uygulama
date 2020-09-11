<?php
include "component/baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için

		// bir kere görüntüleme arttırmak için yazılmıs kod....
	if ($_SESSION["arttirma"]=="false") {
		$sql="update uyecvbilgi set uyecvgoruntulemesayisi=uyecvgoruntulemesayisi+1 where uyecvno='".$_GET["id"]."' ";
		$result=mysqli_query($baglan,$sql);

		$_SESSION["arttirma"]="true";
		$_SESSION["cvkisi_id"]=$_GET["id"];
	}
	else if($_SESSION["arttirma"]=="true" && $_SESSION["cvkisi_id"]!=$_GET["id"]){
		$sql="update uyecvbilgi set uyecvgoruntulemesayisi=uyecvgoruntulemesayisi+1 where uyecvno='".$_GET["id"]."' ";
		$result=mysqli_query($baglan,$sql);
		$_SESSION["cvkisi_id"]=$_GET["id"];
	}
	


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
			<title>CV Göster</title>
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
							
							$sql="select * from uyecvbilgi where uyecvno='".$_GET["id"]."'";
							$result=mysqli_query($baglan,$sql);
							$sonuc = mysqli_fetch_assoc($result);
							if(mysqli_num_rows($result) == 1)
							{
								?>
								<div class="row">
									<div class="col-md-12">	
										<a name="git"></a>
										<form method="post" enctype="multipart/form-data" action="" class="p-3 animate"  style="margin: 1% auto 10% auto;background-color: #fefefe;border: 1px solid #888;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
											
											<div class="form-row">
												<div class="form-group col-md-8">
													
												</div>
												<div class="form-group col-md-4">
													<span style="float: right;">Cv Görüntülenme Sayısı:<b><?php echo $sonuc['uyecvgoruntulemesayisi'] ?></b></span>
												</div>
											</div>
											<div class="form-row" style="border-bottom: 1px solid black;margin-bottom: 10px;">
												<div class="form-group col-md-8">
													<div class="row">
														<div class="col-md-6">
															<legend><h1><?php echo $sonuc['uyecvadisoyadi'] ?></h1></legend>
															<p>
																<label for="meslek"><b>Meslek Ünvanı</b></label><br>
																<label  name="meslek" class="cv-etiket"><?php echo $sonuc['uyecvmeslekunvani'] ?></label>
															</p>
															<p>
																<label for="tcNo"><b>Tc No</b></label><br>
																<label  name="tcno" class="cv-etiket" ><?php echo $sonuc['uyecvtcno'] ?></label>
															</p>
														</div>
														<div class="col-md-6">
															<legend><h1>&nbsp;</h1></legend>
															<p>
																<label for="dogTar"><b>Doğum Tarihi</b></label><br>
																<label  name="dogTar" class="cv-etiket"><?php echo $sonuc['uyecvdogumtarihi'] ?></label>
															</p>
															<p>
																<label for="dogyer"><b>Doğum Yeri</b></label><br>
																<label  name="dogyer" class="cv-etiket"><?php echo $sonuc['uyecvdogumyeri'] ?></label>
															</p>
														</div>
													</div>
													
													
												</div>
												
												<div class="form-group col-md-4">
													
													<figure>
														<div style="width:100%;
														background-image: url('<?php echo $sonuc['uyecvresim2'] ?>');
														background-position: center center;
														height: 200px;
														background-repeat: no-repeat;
														background-size: cover;
														">
													</div>
													<!-- <img src="<?php echo $sonuc['uyecvresim2']; ?>" class="card-img-top"  height="200"> -->
												</figure>
											</div>
										</div>

										<div class="form-row" style="border-bottom: 1px solid black;margin-bottom: 10px;">
											<div class="form-group col-md-8">
												<div class="row">
													<div class="col-md-6">
														<p>
															<label for="mail"><b>E-Mail</b></label><br>
															<label  name="mail" class="cv-etiket"><?php echo $sonuc['uyecveposta'] ?></label>
														</p>
														<p>
															<label for="tel"><b>Telefon</b></label><br>
															<label  name="tel" class="cv-etiket"><?php echo $sonuc['uyecvtelefonno'] ?></label>
														</p>
													</div>
													<div class="col-md-6">
														<p>
															<label for="babaadi"><b>Baba Adı</b></label><br>
															<label  name="babaadi" class="cv-etiket"><?php echo $sonuc['uyecvbabaadi'] ?></label>
														</p>
														<p>
															<label for="anaadi"><b>Anne Adı</b></label><br>
															<label  name="anaadi" class="cv-etiket"><?php echo $sonuc['uyecvanaadi'] ?></label>
														</p>
													</div>
												</div>
											</div>
											
											<div class="form-group col-md-4">
												<p>
													<label for="adres"><b>Adres</b></label><br>
													<label  name="adres" class="cv-etiket"><?php echo $sonuc['uyecvadresi'] ?></label>
												</p>
												<p>
													<label for="kaldigisehir"><b>Kaldığı Şehir</b></label><br>
													<label  name="kaldigisehir" class="cv-etiket"><?php echo $sonuc['uyecvsehir'] ?></label>
												</p>
											</div>
										</div>

										<div class="form-row" style="border-bottom: 1px solid black;margin-bottom: 10px;">
											<div class="form-group col-md-8">
												<div class="row">
													<div class="col-md-6">
														<p>
															<label for="egitimseviyesi"><b>Eğitim Seviyesi</b></label><br>
															<label  name="egitimseviyesi" class="cv-etiket"><?php echo $sonuc['uyeecvgitimseviye'] ?></label>
														</p>
														<p>
															<label for="sonis1"><b>En Son Çalışılan İş</b></label><br>
															<label  name="sonis1" class="cv-etiket"><?php echo $sonuc['uyecvsoncalisilanis1'] ?></label>
														</p>
													</div>
													<div class="col-md-6">
														
														<p>
															<label for="ayrilmetarih"><b>En Son Çalışılan İş Ayrılma Tarihi</b></label><br>
															<label  name="ayrilmetarih" class="cv-etiket"><?php echo $sonuc['uyecvsonisayrilmatarihi'] ?></label>
														</p>
														<p>
															<label for="ayrilmasebep"><b>En Son İş Ayrılma Sebebi</b></label><br>
															<label  name="ayrilmasebep" class="cv-etiket"><?php echo $sonuc['uyecvsonisayrilmasebebi'] ?></label>
														</p>
														
													</div>
												</div>
											</div>
											
											<div class="form-group col-md-4">
												<p>
													<label for="sonokul"><b>Son Mezun Olunan Okul</b></label><br>
													<label  name="sonokul" class="cv-etiket"><?php echo $sonuc['uyecvsonmezunokul'] ?></label>
												</p>
												<p>
													<label for="sonbolum"><b>Son Mezun Olunan Bölüm</b></label><br>
													<label  name="sonbolum" class="cv-etiket"><?php echo $sonuc['uyecvsonmezunbolum'] ?></label>
												</p>
											</div>
										</div>
										
										<div class="form-row">
											<div class="form-group col-md-12">
												<p>
													<label for="cvozet"><b>CV Özet Bilgi</b></label><br>
													<label  name="cvozet" class="cv-etiket"><?php echo $sonuc['uyecvozetbilgi1'] ?></label>
												</p>
											</div>
											
										</div>
										
										
										
										
										
										
										<button type="submit" class="loginbuton cancelbtn yazdir" name="yazdir" onClick="window.print();">CV Yazdır</button>
										
										
										<?php
									}
									
									  //   if (isset($_POST["yazdir"])) {
									  //   	# code...
									
											// echo '<script type="text/javascript">
											// $(document.ready(function(){
											//       window.print();
											// }));
											// </script>';
									 	//  } 

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