<section class="home-section section-hero overlay" style="background: url('images/hero_1.jpg') no-repeat  ; 
    background-attachment: fixed;
    background-size: cover;"  >
<div class="container">
	<a name="next2"></a>
	<!-- LOGO ve Menüler -->
	<div class="row align-items-center justify-content-center">
		<div class="col-md-4"> 
			<figure>
				<a href="index.php"> 
					<img src="images/logo/logo2.png" alt=""  style="margin-top: 10px;">
				</a>
			</figure>
		</div>
		<div class="col-md-8 navbar navbar-expand-lg navbar-dark">
			<button style="margin-left: 42px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav  ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">  
							Anasayfa
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="hakkimizda.php#git">  
							Hakkımızda
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="iletisim.php#git">  
							İletişim
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./isarayanlar.php?unvan=&sehirler=#git">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-bounding-box" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
								<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
							İş Arayanlar
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./ilanara.php?unvan=&sehirler=&tur=#git">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
							</svg> 
							İlanlar
						</a>
					</li>
					 
						
						<?php

							if ($_SESSION["login"]=="uye") {
						?>
							 
							 <li class="nav-item">
									<!--<a class="loginbuton" href="">Üye Giriş</a>  böyle yapınca ekran kücülünce üst üste biniyor --> 
									<div class="dropdown">
										<button   class="loginbuton dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hoşgeldiniz:<?php echo $_SESSION["adsoyad"]; ?></button> 
										<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button" onclick="document.location.href='./cvduzenle.php#git'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M10.146 5.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 9l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
											  <path fill-rule="evenodd" d="M3 2.5a.5.5 0 0 0-.5.5v4A2.5 2.5 0 0 0 5 9.5h8.5a.5.5 0 0 0 0-1H5A1.5 1.5 0 0 1 3.5 7V3a.5.5 0 0 0-.5-.5z"/>
											</svg>CV</button>
											<button class="dropdown-item" type="button" onclick="document.location.href='./basvurulanilanlar.php#git'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
											  <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
											  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
											  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
											</svg>Başvurulan İlanlar</button>
											<button class="dropdown-item" type="button" style="border-top: 1px solid black;"  onclick="document.location.href='./cikis.php'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm.394 4.708a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
										</svg>ÇIKIŞ</button>
											 
										</div>
									</div>
								</li>
							 
						<?php

							}
							else if($_SESSION["login"]=="firma"){

						?>
						<li class="nav-item">
									<!--<a class="loginbuton" href="">Üye Giriş</a>  böyle yapınca ekran kücülünce üst üste biniyor --> 
									<div class="dropdown">
										<button   class="loginbuton dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hoşgeldiniz:<?php echo $_SESSION["unvan"]; ?></button> 
										<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
											 <button class="dropdown-item" type="button"  onclick="document.location.href='./ilanver.php#git'"> 
											 	 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
										</svg>
										  İlan Ver</button>
										   <button class="dropdown-item" type="button"  onclick="document.location.href='./ilanlarim.php#git'"> 
											 	 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm4.5 11h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-1 0v2.793L5.854 5.146a.5.5 0 1 0-.708.708L9.293 10H6.5a.5.5 0 0 0 0 1z"/>
												</svg>
										  İlanlarım</button>
										   <button class="dropdown-item" type="button"  onclick="document.location.href='./firmaprofili.php#git'"> 
											 	 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
													  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
													</svg>
										  Firma Profili</button>
											<button class="dropdown-item" type="button" style="border-top: 1px solid black;" onclick="document.location.href='./cikis.php'" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm.394 4.708a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
										</svg>ÇIKIŞ</button>
											 
										</div>
									</div>
							</li>
							 
							 

							<?php

							} 
							else
							{


						?>
								 <li class="nav-item">
									<!--<a class="loginbuton" href="">Üye Giriş</a>  böyle yapınca ekran kücülünce üst üste biniyor --> 
									<div class="dropdown">
										 
										<a href="" class="loginbuton dropdown-toggle btn" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-2"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg></span>Üye Girisi</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button" onclick="document.getElementById('uye-giris').style.display='block'">Giriş Yap</button>
											<button class="dropdown-item" type="button"  onClick="document.location.href='uyeol.php#git'">Üye Ol</button>
										</div>
									</div>
								</li>
								<li class="nav-item">
									<!-- 	<a class="loginbuton" href="">Firma Giriş</a> -->
									<div class="dropdown">
										<a href="" class="loginbuton dropdown-toggle btn" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-2"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg></span>Firma Girisi</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button" onclick="document.getElementById('uye-giris').style.display='block'">Giriş Yap</button>
											<button class="dropdown-item" type="button" onClick="document.location.href='firmauyeol.php#git'">Firma Kayıt</button>
										</div>
									</div> 

								</li>

							<?php

								}
							?>
				 
				</ul>
			</div>

		</div>
	</div>
	<!-- İş İlanı Arama Yeri -->
	<div class="row"  style="margin-top: 70px;">
		<div class="col-md-12">
			<div class="s01">
				<form method="get" action="ilanara.php#git">
					<div class="mb-3 text-center">
		              <h1 class="text-white font-weight-bold" style="font-family: 'Nunito', sans-serif;">Ruyalarinizdaki kariyer burada...</h1>
		              <p style="font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.6);">Yapmanız gereken sadece <strong>CV</strong>'nizi oluşturmak ve binlerce iş arasından tek tık ile başvuru yapmak...</p>
		            </div>
					<div class="inner-form">
						<div class="input-field first-wrap">
							<input id="search" type="text" placeholder="Meslek?" name="unvan" style="height: calc(2em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.3rem;" />
						</div>
						<div class="input-field second-wrap">
							<select name="sehirler" class="form-control" style="margin-top: 5px;" onfocus='this.size=7;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
								<?php
									include "component/sehirler.php";
								?>
							</select>
						</div>
						<div class="input-field third-wrap">
							<button class="btn-search loginbuton" type="submit" style="background-color: #89ba16;height: calc(2em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.3rem;">İş Ara</button>
						</div>
					</div>
				</form>
			</div>
		<!--  İş İlanı ara ikinci 
			<div class="row search">
		                        <div class="col-12 col-md-10 col-lg-8">
		                            <form class="card card-sm" method="post" action="">  
		                                <div class="card-body row no-gutters align-items-center">
		                                    <div class="col-auto">
		                                        <i class="fas fa-search h4 text-body"></i>
		                                    </div>
		                                    <div class="col">
		                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Meslek?" name="meslek">
		                                    </div>
		                                    <div class="col-auto">
		                                        <button class="btn btn-lg btn-success" type="submit" name="ara">İlan Ara</button>
		                                    </div>
		                                </div>
		                            </form>
		                        </div>    
		    </div>
		-->
	</div>
</div>
</div>
<hr style="border-color: white;opacity: 0.9;">
<!-- Header En Alt Menü -->
<div class="container header-alti">
	<div class="row">
		<div class="col-md-12 ">
			<ul>
				<li><a href="ilanara.php?unvan=&sehirler=&tur=acil">Acil İş İlanları</a></li>
				<li><a href="ilanara.php?unvan=&sehirler=&tur=part">Part Time İlanlar</a></li>
				<li><a href="ilanara.php?unvan=&sehirler=&tur=staj">Staj İlanları</a></li>
				<li><a href="ilanara.php?unvan=&sehirler=&tur=freelance">Freelance İlanlar</a></li>
				<li><a href="ilanara.php?unvan=&sehirler=&tur=engelli">Engelli İş İlanları</a></li>
				<li><a href="ilanara.php?unvan=&sehirler=&tur=">Tüm İş İlanları</a></li>	
			</ul>
		</div>
	</div>
	 
</div>

<div class="container">
	<div class="row text-center p-3">
		<div class="col-md-12">
			<span>
		<a href="#next" style="color: white">
       
		<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-down-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg>
		  </a>
	</span>
	
    
		</div>
	</div>
</div>


 <?php
 	include "header/login.php";

 ?>
</section>