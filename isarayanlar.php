<?php
include "component/baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için



	?>
	<!DOCTYPE html>
	<html>
	<head>
		<!-- Buraya META etiketleri ekle -->
		<title>İş Arayanlar</title>
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
						<div class="row">
							<div class="col-md-12">
								 <form method="GET" action="isarayanlar.php#git">
								 	<legend><h1>Hızlı Arama</h1></legend>
									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label for="inputCity"><b>Meslek</b></label>
									      <input type="text" class="form-control"  name="unvan">
									    </div>
									    <div class="form-group col-md-4">
									      <label for="inputState"><b>Şehir</b></label>
									      <select name="sehirler" class="form-control"  >							 
												<?php
													include "component/sehirler.php";
												?>
											</select>
									    </div>
									    <div class="form-group col-md-2">
											<button type="submit" class="loginbuton" style="width: 100%;margin-top: 18px;" >Hızlı Ara</button>
									    </div>
									  </div>
 
									  
									</form>
							</div>	
						</div>
						<div class="row">

							<?php
							$unvan=$_GET["unvan"];

							$sehirler=$_GET["sehirler"];
							$sayfada = 3; // sayfada gösterilecek içerik miktarını belirtiyoruz.

 							

							$sorgu1 = mysqli_query($baglan,"SELECT COUNT(*) AS toplam FROM uyecvbilgi where uyecvmeslekunvani like '%$unvan%' and uyecvsehir like '%$sehirler%'");
							$sonuc1 = mysqli_fetch_assoc($sorgu1);
							$toplam_icerik = $sonuc1['toplam'];
							 
							$toplam_sayfa = ceil($toplam_icerik / $sayfada);
							$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

							if($sayfa < 1) $sayfa = 1; 
							if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
							$limit = ($sayfa - 1) * $sayfada;


								$sql = "select * from uyecvbilgi where uyecvmeslekunvani like '%$unvan%' and uyecvsehir like '%$sehirler%'  order by uyecvno desc  limit $limit,$sayfada ";
								$sorgu=mysqli_query($baglan,$sql);
							echo "<div class=container><div class=row><div class=col-md-12 ><span style=float:right;font-weight:bold;margin-bottom:5px;>toplam görüntüleme:$toplam_icerik</span></div></div></div>";
								while( $sonuc=mysqli_fetch_assoc($sorgu))
								{
							?>

							<div class="col-md-12">
								 
									<div class="card shadow mb-5 shadow mb-5">
										<div class="row">
											<div class="col-md-4">
												<div style="width:100%;
											background-image: url('<?php echo $sonuc['uyecvresim2'] ?>');
											background-position: center center;
											height: 200px;
											background-repeat: no-repeat;
											background-size: cover;
											">
											</div>
												<!-- <img class="card-img-top" src="<?php echo $sonuc['uyecvresim2'] ?>" alt="Card image cap">											 -->
											</div>
											<div class="col-md-8">
												<div class="card-body">
													<h6 class="card-title"><?php echo mb_strtoupper($sonuc['uyecvadisoyadi']) ?>
														<?php
															if($_SESSION["login"]=="firma"){
														?>
														<span>
															<form method="post" action="">
																<button id="test" class="loginbuton" style="float: right; " name="cvgoruntule" onclick="window.open('cvgoster.php?id=<?php echo $sonuc['uyecvno']?>#git')"  >CV Görüntüle</button>
															</form>
														</span>
														<?php
														 }
														 else
														 {
														 	echo "<span style=float:right;>Cv görüntülemek için <b>Firma Girişi</b> yapınız. </span>";
														 }

														 
														?>
													</h6>
													<p class="card-text"><?php echo $sonuc['uyecvsehir'] ?></p>
													<h6 class="card-title"><?php echo $sonuc['uyecvmeslekunvani'] ?></h6>
													<p class="card-text"><?php echo $sonuc['uyecvozetbilgi1'] ?></p>

												</div>
											</div>
										</div>
											
									</div>
								 
							</div>
							<?php
								}

								
							?>
							<!-- sayfalama yapma -->
						</div>
						<div class="row">
							<div class="col-md-12" style="text-align: center;padding-bottom: 20px;color: #C0AA74;">
								<?php
		 							$sayfa_goster = 11;		
		 							$en_az_orta = ceil($sayfa_goster/2);
									$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;

									$sayfa_orta = $sayfa;
									if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
									if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;

									$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
									$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
									 
									if($sol_sayfalar < 1) $sol_sayfalar = 1;
									if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;

									if($sayfa != 1) echo ' <a href="?unvan='.$unvan.'&sehirler='.$sehirler.'&sayfa=1#git" style=font-weight:bold;>
									<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-double-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
									  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
									</svg>
										</a> ';
									if($sayfa != 1) echo ' <a href="?unvan='.$unvan.'&sehirler='.$sehirler.'&sayfa='.($sayfa-1).'#git"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
										</svg></a> ';
										for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
											    if($sayfa == $s) {
											        echo '<span style=font-size:20px;>[' . $s . '] </span>';
											    } else {
											        echo '<a href="?sayfa='.$s.'#git" style=font-size:20px;>'.$s.'</a> ';
											    }
											}
											if($sayfa != $toplam_sayfa) echo ' <a href="?unvan='.$unvan.'&sehirler='.$sehirler.'&sayfa='.($sayfa+1).'#git"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
											</svg></a> ';
											if($sayfa != $toplam_sayfa) echo ' <a href="?unvan='.$unvan.'&sehirler='.$sehirler.'&sayfa='.$toplam_sayfa.'#git"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
										  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
										</svg></a>';
									?>
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

	ob_end_flush();
	mysqli_close($baglan);
	?>