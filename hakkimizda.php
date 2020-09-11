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
		<title>Hakkımızda</title>
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
						 <hr>
				<section style="background-image: url(images/hero_1.jpg);background-attachment: fixed;
				    background-size: cover;" class="home-section section-hero overlay-primary bg-image">
		       <?php include "component/istatistik.php"; ?>
		   		 </section>
				<section>
				
				<section>
		
					 <div class="container">
					 	<div class="row mb-5">
				          <div class="col-12 text-center">
				            <h2 class="section-title mb-3" style="margin-top: 50px;">Web ve Mobile Developer Takimimiz</h2>
				          </div>
				        </div>
				        <div class="row align-items-center block__69944">

				          <div class="col-md-6">
				            <img src="images/person100.jpg" alt="Image" class="img-fluid mb-4 rounded">
				          </div>

				          <div class="col-md-6">
				            <h3>Yılmaz ÖLMEZ</h3>
				            <p class="text-muted" style="color: #ced4da !important;">Bilgisayar Mühendisi</p>
				            <p>Namık Kemal Universitesi - Çorlu Mühendislik Fakültesi - Bilgisayar Mühendisliği Bölümü  </p>
				            <div class="social mt-4">
				              <section id="services">
								
							<ul id="services" style="margin-left: -40px;">
								<li>
									<div class="facebook" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li>
									<div class="twitter" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li>
									<div class="youtube" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-youtube" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li>
									<div class="linkedin" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li>
									<div class="instagram" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</div>
								</li>
							</ul>
							</section>
				            </div>
				          </div>

				          <div class="col-md-6 order-md-2 ml-md-auto">
				            <img src="images/person101.jpg" alt="Image" class="img-fluid mb-4 rounded">
				          </div>

				          <div class="col-md-6">
				            <h3>Mustafa ALTUNDAĞ</h3>
				            <p class="text-muted" style="color: #ced4da !important;">Bilgisayar Muhendisi</p>
				            <p>Namık Kemal Universitesi - Çorlu Mühendislik Fakültesi - Bilgisayar Mühendisliği Bölümü</p>
				            <div class="social mt-4">
				              <section id="services">
								
							<ul id="services" style="margin-left: -40px;">
								<li>
									<div class="facebook" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li>
									<div class="twitter" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li>
									<div class="youtube" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-youtube" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li>
									<div class="linkedin" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li>
									<div class="instagram" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
										<a href="">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</div>
								</li>
							</ul>
							</section>
				            </div>
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