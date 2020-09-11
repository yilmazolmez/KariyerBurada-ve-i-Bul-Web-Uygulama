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
	<title>Panel</title>
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
			            <a href="#git"><span class="fa fa-sticky-note mr-3"></span> Uygulama Log</a>
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
		      			<h2 class="mb-4">Cpanel Ekranına Hoşgeldiniz</h2>
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

		      	<div class="row mt-5">
		      		<div class="col-md-12">
		      			<a name="git"></a>
		      			<h2 class="mb-4">Log Kayıtları</h2>
				        <table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Kullanıcı Adı</th>
						      <th scope="col">Log Tür</th>
						      <th scope="col">Giriş</th>
						      <th scope="col">Çıkış</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
							  		$sayfada = 5; // sayfada gösterilecek içerik miktarını belirtiyoruz.
									$bugunun_tarihi=date('Y-m-d');
		 							

									$sorgu1 = mysqli_query($baglan,"SELECT COUNT(*) AS toplam FROM uygulamalog ");
									$sonuc1 = mysqli_fetch_assoc($sorgu1);
									$toplam_icerik = $sonuc1['toplam'];
									 
									$toplam_sayfa = ceil($toplam_icerik / $sayfada);
									$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

									if($sayfa < 1) $sayfa = 1; 
									if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
									$limit = ($sayfa - 1) * $sayfada;




						  			$sql="select * from uygulamalog order by loginno desc limit $limit,$sayfada";
									$result=mysqli_query($baglan,$sql);
									$a=1;
									if (mysqli_num_rows($result) == 0) {
										    echo "<span>Log Kaydı bulunmamaktadır.</span>";
										    
										}
									echo "<div class=container><div class=row><div class=col-md-12 ><span style=float:right;font-weight:bold;margin-bottom:5px;>toplam kayıt:$toplam_icerik</span></div></div></div>";
									while($sonuc=mysqli_fetch_assoc($result))
									{
						  	?>
						    <tr>
						      <th scope="row"><?php echo $a; ?></th>
						      <td><?php echo $sonuc["loginkullaniciadi"]; ?></td>
						      <td><?php echo $sonuc["tur"]; ?></td>
						      <td><?php echo $sonuc["loginzamani"]; ?></td>
						      <td><?php echo $sonuc["logoutzamani"]; ?></td>
						    </tr>
						    <?php
						    	$a++;
						   		 }


						   		 	
						    ?>
						  </tbody>
						</table>
							<div class="row">
								<div class="col-md-12" style="text-align: center;padding-bottom: 20px;color: red;">
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

											if($sayfa != 1) echo ' <a href="?sayfa=1" style=font-weight:bold;>
											<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-double-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
											  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
											</svg>
												</a> ';
											if($sayfa != 1) echo ' <a href="?sayfa='.($sayfa-1).'"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
												</svg></a> ';
												for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
													    if($sayfa == $s) {
													        echo '<span style=font-size:20px;>[' . $s . '] </span>';
													    } else {
													        echo '<a href="?sayfa='.$s.'" style=font-size:20px;>'.$s.'</a> ';
													    }
													}
													if($sayfa != $toplam_sayfa) echo ' <a href="?sayfa='.($sayfa+1).'"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
													</svg></a> ';
													if($sayfa != $toplam_sayfa) echo ' <a href="?sayfa='.$toplam_sayfa.'"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
												  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
												</svg></a>';
											?>
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