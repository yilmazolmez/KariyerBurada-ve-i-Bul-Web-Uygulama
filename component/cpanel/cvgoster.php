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
	<title>Üyeler CV</title>
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
			            <a href="ilanlar"><span class="fa fa-file-text mr-3"></span> İlanlar</a>
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
  			 
	        <!-- Page Content  -->
		      <div 	class="container p-4 p-md-5 pt-5">
 
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
													<img src="<?php echo '../../'.$sonuc['uyecvresim2']; ?>" class="card-img-top">
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