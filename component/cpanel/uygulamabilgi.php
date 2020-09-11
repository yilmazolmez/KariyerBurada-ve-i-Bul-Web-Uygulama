<?php
	include "../baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için
	$referer = $_SERVER['HTTP_REFERER'];  

if ($referer == "")  
{  
 header("Location:../../cpanel.php");
}  
else  
{ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Uygulama Bilgi</title>
	<?php
		include "../css/css.php";
  	?>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

  	<div class="wrapper d-flex align-items-stretch">
				<nav id="sidebar">
					<div class="custom-menu">
						 <button type="button" id="sidebarCollapse" class="btn btn-primary">
				          <i class="fa fa-bars"></i>
				          <span class="sr-only">Toggle Menu</span>
				        </button>
			        </div>
				  		<h1><a href="index.php" class="logo">Kariyer Burada Cpanel</a></h1>
			        <ul class="list-unstyled components mb-5">
			          <li class="active">
			            <a href="index.php"><span class="fa fa-home mr-3"></span> Anasayfa</a>
			          </li>
			          <li>
			              <a href="uyeler.php"><span class="fa fa-user mr-3"></span> Üyeler</a>
			          </li>
			          <li>
			            <a href="firmalar.php"><span class="fa fa-users mr-3"></span> Firmalar</a>
			          </li>
			          <li>
			            <a href="ilanlar.php"><span class="fa fa-file-text mr-3"></span> İlanlar</a>
			          </li>
			          <li>
			            <a href="index.php#git"><span class="fa fa-sticky-note mr-3"></span> Uygulama Log</a>
			          </li>
			          <li>
			            <a href="uygulamabilgi.php"><span class="fa fa-paper-plane mr-3"></span> Uygulama Bilgi</a>
			          </li>
			          
			          <li style="">
			            <a href="../../index.php"><span class="fa fa-sign-out mr-3"></span> ÇIKIŞ</a>
			          </li>
			        </ul>

	    	</nav>
	    	<?php 

	    		 
	    		$uyeler=mysqli_query($baglan,"select count(*) as toplam_uye from uyecvbilgi");
	    		$uye=mysqli_fetch_assoc($uyeler);

	    		$firmalar=mysqli_query($baglan,"select count(*) as toplam_firma from uyefirmabilgi");
	    		$firma=mysqli_fetch_assoc($firmalar);

	    		$ilanlar=mysqli_query($baglan,"select count(*) as toplam_ilan from uyefirmaisilanbilgi");
	    		$ilan=mysqli_fetch_assoc($ilanlar);

	    	?>
	        <!-- Page Content  -->
		      <div 	class="container p-4 p-md-5 pt-5">
		      	<div class="row">
		      		<div class="col-md-12">
		      			<h2 class="mb-4">Uygulama Bilgileri</h2>
		      		</div>
		      	</div>
		      	<?php
		      	$sql="select * from uygulamabilgi";
		      	$sorgu=mysqli_query($baglan,$sql);
		      	$sonuc=mysqli_fetch_assoc($sorgu);
		      	?>
		      	<div class="row mt-5">
		      		<div class="col-md-12">
		      			<a name="git"></a>
		      			<form method="post" enctype="multipart/form-data" action="" class="p-3 animate" style="margin: 1% auto 10% auto;background-color: #fefefe;border: 1px solid #888;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
									<legend><h1> </h1></legend>
									  <div class="form-row">
										    <div class="form-group col-md-4">
										      <label for="unvan"><h6>Web Uygulama Mühendisi</h6></label>
										      <label class="form-control"><?php echo $sonuc["webuygulamamuhendisi"]; ?></label>
										      
										    </div>
										    <div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>Mobil Uygulama Mühendisi</h6></label>
										      <label class="form-control"><?php echo $sonuc['mobiluygulamamuhendisi'] ?></label>
										       
										    </div>
										     <div class="form-group col-md-4">
									   			 <label for="mail"><h6>Web Uygulama Adı</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['webuygulamaadi'] ?></label>
									   		 	  
									  		</div> 
									  </div>
									  <div class="form-row">
										    <div class="form-group col-md-4">
										      <label for="adres"><h6>Mobil Uygulama Adı</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['mobiluygulamaadi'] ?></label>

										    </div>
										      <div class="form-group col-md-4">
										      <label for="vergino"><h6>Panel Giriş Kullanıcı Adı</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['kullaniciadi'] ?></label>

										 
										    </div>
										    <div class="form-group col-md-4">
										      <label for="vergidairesi"><h6>Panel Giriş Şifre</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['sifre'] ?></label>

										    
										    </div>
										    
									  </div>
 
 
								</form>
 
 
 						<h2></h2>
 						<label><?php echo $sonuc[""]; ?></label>
 						<h2></h2>
 						<label><?php echo $sonuc[""]; ?></label>
 						<h2></h2>
 						<label><?php echo $sonuc[""]; ?></label>
		      		</div>
		      	</div>
		      	<div class="row">
		      		<div class="col-md-4">
		      			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Toplam Üye</h5>
						    <p class="card-text">Şuan Aktif Üye Sayısı : <span style="font-weight: bold;font-size: 20px;color: red;"><?php echo $uye["toplam_uye"]; ?></span></p>
						  </div>
						</div>
		      		</div>
		      		<div class="col-md-4">
		      			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="images/2.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Toplam Şirket</h5>
						    <p class="card-text">Şuan Aktif Firma Sayısı : <span style="font-weight: bold;font-size: 20px;color: red;"><?php echo $firma["toplam_firma"]; ?></span></p>
						  </div>
						</div>
		      		</div>
		      		<div class="col-md-4">
		      			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Toplam İlan</h5>
						    <p class="card-text">Şuan Aktif İlan Sayısı : <span style="font-weight: bold;font-size: 20px;color: red;"><?php echo $ilan["toplam_ilan"]; ?></span></p>
						  </div>
						</div>
		      		</div>
		      	</div>

		      	
			        
			        
			        
		     </div>
	</div>
	<?php
		include "../js/js.php";
  	?>
    <script src="js/main.js"></script>
</body>
</html>

<?php

}
ob_end_flush();
mysqli_close($baglan);
?>