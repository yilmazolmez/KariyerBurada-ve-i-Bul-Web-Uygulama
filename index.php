<?php
	include "component/baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Buraya META etiketleri ekle -->
	<title>Kariyer Burada</title>
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
				<?php include "component/main-firmalar.php"; ?>
			</section>
			<section class="main-elemanlar home-section section-hero overlay-primary bg-image" style="background: url('images/hero_1.jpg') no-repeat  ; 
				    background-attachment: fixed;
				    background-size: cover;margin-top: 100px;">
				<div class="container">
					<div class="row" style="padding-bottom: 70px;">
						<div class="col-md-12 p-5">
							<h1><center><span style="color: white;">İş Arayan Herkes Burada!</span></center></h1>
							<h3><center><span style="color: white;">Meslek seçimine göre iş ilanlarına rahatça ulaşabilirsiniz</span></center></h1>					
						</div>
					</div>
				</div>
			</section>
			<section>
					<?php include "component/main-kisiler.php"; ?>
			</section>
			<section style="background-image: url(images/hero_1.jpg);background-attachment: fixed;
				    background-size: cover;margin-top: 100px;" class="home-section section-hero overlay-primary bg-image">
		       <?php include "component/istatistik.php"; ?>
		    </section>
			<section>
					<?php include "component/main-acil-yeni-ilanlar.php"; ?>
			</section>
			<section class="mobil-yeri home-section section-hero overlay-primary bg-image" style="background: url('images/hero_1.jpg') no-repeat  ; 
				    background-attachment: fixed;
				    background-size: cover;">
				<?php include "component/sosyal-medya.php"; ?>
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