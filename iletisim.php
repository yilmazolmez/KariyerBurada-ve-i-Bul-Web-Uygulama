<?php
include "component/baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için
			 
  
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<!-- Buraya META etiketleri ekle -->
		<title>İletişim</title>
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
	
					 <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
					 	<div class="row" style="margin-bottom: 20px;margin-left: 5px;">
					 		<h1>İLETİŞİM</h1>
					 	</div>
				        <div class="row">
				          <div class="col-lg-6 mb-5 mb-lg-0">
				            <!--<form action="#" class=""> -->
				              <form id="contact-form" action="https://formspree.io/xnqgkzzv" method="post" enctype="multipart/form-data" style="    box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);
    padding: 20px;">
				              <fieldset>
				                <div class="row form-group">
				                
				                <div class="col-md-12">
				                  <label class="text-black" for="email">Ad Soyad</label> 
				                  <input type="text" name="Ad Soyad" class="form-control" placeholder="Ad Soyad" required>
				                </div>
				              </div>

				                <div class="row form-group">
				                
				                <div class="col-md-12">
				                  <label class="text-black" for="email">Telefon Numaraniz</label> 
				                  <input type="number" name="Telefon" class="form-control" placeholder="05xx xxx xx xx" required>
				                </div>
				              </div>

				              <div class="row form-group">
				                
				                <div class="col-md-12">
				                  <label class="text-black" for="email">Email</label> 
				                  <input type="email" name="Email" class="form-control" placeholder="Email Adresiniz" required>
				                </div>
				              </div>

				              <div class="row form-group">
				                
				                <div class="col-md-12">
				                  <label class="text-black" for="subject">Konu</label> 
				                  <input type="subject" name="Konu" class="form-control" placeholder="Konu" required>
				                </div>
				              </div>

				              <div class="row form-group">
				                <div class="col-md-12">
				                  <label class="text-black" for="message">Mesaj</label> 
				                  <textarea name="Mesaj" cols="30" rows="7" class="form-control" placeholder="Mesaj veya sorularinizi girebilirsiniz..." required></textarea>
				                </div>
				              </div>

				              <div class="row form-group">
				                <div class="col-md-12">
				                  <button type="submit"  class="btn btn-success btn-md text-white p-3" style="background-color: #89ba16;border:0px;">EMail Gonder</button>
				                  <!--<input type="submit" name=value="Email Gonder" class="btn btn-primary btn-md text-white">-->
				                </div>
				              </div>
				              </fieldset>
				  
				            </form>
				          </div>
				          <div class="col-lg-5 ml-auto" >
				            <div class="p-4 mb-3 bg-white" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
				              <p class="mb-0 font-weight-bold">Web Uygulama Developer</p>
				              <p class="mb-4">Bilgisayar Mühendisi: Yılmaz ÖLMEZ - Avcılar /İSTANBUL </p>

				              <p class="mb-0 font-weight-bold">Telefon</p>
				              <p class="mb-4"> 90 534 062 23 50 </p>

				              <p class="mb-0 font-weight-bold">Email Adresi</p>
				              <p class="mb-0"> yilmazlmez@gmail.com </p>

				            </div>

				              <div class="p-4 mb-3 bg-white" style="box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);">
				              <p class="mb-0 font-weight-bold">Mobil Uygulama Developer</p>
				              <p class="mb-4">Bilgisayar Mühendisi: Mustafa ALTUNDAĞ- Maltepe /İSTANBUL </p>

				              <p class="mb-0 font-weight-bold">Telefon</p>
				              <p class="mb-4"> 90 532 210 09 76 </p>

				              <p class="mb-0 font-weight-bold">Email Adresi</p>
				              <p class="mb-0"> mustafa.altundag@turkcell.com.tr </p>

				            </div>
				          </div>
				        </div>
				      </div>
				      <div class="container-fluid" style="background-color: #F8F9FA;padding-bottom: 50px;" >
				        <div class="row mb-5">
				          <div class="col-12 text-center" >
				            <h2 class="section-title mb-3" style="margin-top: 30px;">Biz Neredeyiz</h2>
				          </div>
				        </div>
				        <div class="row">
				        	 <div class="col-lg-1">
				             
				          </div>
				          <div class="col-lg-10">
				             <iframe src="https://maps.google.com/maps?q=avc%C4%B1lar&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="435" frameborder="0" style="border:0" allowfullscreen></iframe>
				          </div>
				           <div class="col-lg-1">
				              
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