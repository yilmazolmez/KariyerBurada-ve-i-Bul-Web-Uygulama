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
	<title>Firmalar CV</title>
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
								 	$id=$_GET["id"];
									$sql="select * from uyefirmabilgi where uyefirmano='$id'";
									$result=mysqli_query($baglan,$sql);
									$sonuc = mysqli_fetch_assoc($result);
									if(mysqli_num_rows($result) == 1)
									{
								?>
 
						<div class="row">
							<div class="col-md-12" >	
								
								<form method="post" enctype="multipart/form-data" action="" class="p-3 animate" style="margin: 1% auto 10% auto;background-color: #fefefe;border: 1px solid #888;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
									<legend><h1>Firma Profili</h1></legend>
									<div class="form-row">
										    <div class="form-group col-md-4">
										      <figure>
													<img src="<?php echo '../../'.$sonuc['uyefirmaresim2']; ?>" class="card-img-top">
											</figure>
										    </div>
										     
									  </div>
									  <div class="form-row">
										    <div class="form-group col-md-4">
										      <label for="unvan"><h6>Ünvan</h6></label>
										      <label class="form-control"><?php echo $sonuc['uyefirmaunvani'] ?></label>
										      
										    </div>
										    <div class="form-group col-md-4">
										      <label for="inputPassword4"><h6>Telefon</h6></label>
										      <label class="form-control"><?php echo $sonuc['uyefirmatelefonno'] ?></label>
										       
										    </div>
										     <div class="form-group col-md-4">
									   			 <label for="mail"><h6>E-Mail</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['uyefirmaeposta'] ?></label>
									   		 	  
									  		</div> 
									  </div>
									  <div class="form-row">
										    <div class="form-group col-md-4">
										      <label for="adres"><h6>Adres</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['uyefirmaadres'] ?></label>

										    </div>
										      <div class="form-group col-md-4">
										      <label for="vergino"><h6>Firma Vergi No</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['uyefirmavergino'] ?></label>

										 
										    </div>
										    <div class="form-group col-md-4">
										      <label for="vergidairesi"><h6>Firma Vergi Dairesi</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['uyefirmavergidairesi'] ?></label>

										    
										    </div>
										    
									  </div>
									 
									  <div class="form-row">
										     
										    <div class="form-group col-md-4">
										      <label for="sehir"><h6>Şehir</h6></label>
									   			 <label class="form-control"><?php echo $sonuc['uyefirmasehir'] ?></label>

										    </div>
										    <div class="form-group col-md-4">
										   		 <label for="ilgilikisi"><h6>Firma İlgili Şahıs</h6></label><br>
									   			 <label class="form-control"><?php echo $sonuc['uyefirmailgilisahis'] ?></label>

										   		 
									 		 </div>
										    <div class="form-group col-md-4">
										   		 <label for="calisansayisi"><h6>Firma Çalışan Sayısı</h6> </label><br>
									   			 <label class="form-control"><?php echo $sonuc['uyefirmacalisansayisi'] ?></label>

									 		 </div>
									  </div>
 
 
									   
									    
									  <div class="form-row">
										    <div class="form-group col-md-6">
										   		 <label for="ozet"><h6>Firma Özet Bilgi</h6></label><br>
									   			 <label class="form-control"><?php echo $sonuc['uyefirmaozetbilgi1'] ?></label>

									 		 </div>

									  </div>
									  <button type="submit" class="loginbuton cancelbtn yazdir" name="yazdir" onClick="window.print();">CV Yazdır</button>
									 <?php
									  }
 
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