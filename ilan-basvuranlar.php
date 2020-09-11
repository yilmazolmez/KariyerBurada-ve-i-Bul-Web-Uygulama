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
		<title>İlana Başvuran Kişiler</title>
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
					<div class="container" style="margin-top:20px;">
								
						 
						<div class="row">
							<div class="col-md-12" >	
								
								 
								<table class="table animate" style="margin: 1% auto 10% auto;background-color: #fefefe;border: 1px solid #888;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
									<legend><h2>İlana Başvuran Kişiler</h2></legend>
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col"> </th>
								      <th scope="col">Ad Soyad</th>
								      <th scope="col">Başvuru Yaptığı Tarih</th>
								      <th scope="col">Kişi CV</th>
								    </tr>
								  </thead>
								  <tbody>
								  	 
						 			
 	
								  	<?php
								 
									$sql="select * from uyefirmaisilanbasvurubilgi where isilanno='".$_GET["id"]."'";
									$result=mysqli_query($baglan,$sql);
									$a=1;
									if (mysqli_num_rows($result) == 0) {
										    echo "<span>Başvuran Kişi Yoktur.</span>";
										    
										}
									while($sonuc=mysqli_fetch_assoc($result))
									{
								?>
								    <tr>
								      <th scope="row"><?php echo $a; ?></th>
								      <td><b><?php echo $sonuc["uyecvadisoyadi"]; ?></b></td>
								      <td><?php echo $sonuc["basvurutarihi"]; ?></td>
								      <td><a href="cvgoster.php?id=<?php echo $sonuc["uyecvno"]; ?>#git" target="_blank" style="color: green;">
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrows-fullscreen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.464 10.536a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3.5a.5.5 0 0 1-.5-.5v-3.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M5.964 10a.5.5 0 0 1 0 .707l-4.146 4.147a.5.5 0 0 1-.707-.708L5.257 10a.5.5 0 0 1 .707 0zm8.854-8.854a.5.5 0 0 1 0 .708L10.672 6a.5.5 0 0 1-.708-.707l4.147-4.147a.5.5 0 0 1 .707 0z"/>
  <path fill-rule="evenodd" d="M10.5 1.5A.5.5 0 0 1 11 1h3.5a.5.5 0 0 1 .5.5V5a.5.5 0 0 1-1 0V2h-3a.5.5 0 0 1-.5-.5zm4 9a.5.5 0 0 0-.5.5v3h-3a.5.5 0 0 0 0 1h3.5a.5.5 0 0 0 .5-.5V11a.5.5 0 0 0-.5-.5z"/>
  <path fill-rule="evenodd" d="M10 9.964a.5.5 0 0 0 0 .708l4.146 4.146a.5.5 0 0 0 .708-.707l-4.147-4.147a.5.5 0 0 0-.707 0zM1.182 1.146a.5.5 0 0 0 0 .708L5.328 6a.5.5 0 0 0 .708-.707L1.889 1.146a.5.5 0 0 0-.707 0z"/>
  <path fill-rule="evenodd" d="M5.5 1.5A.5.5 0 0 0 5 1H1.5a.5.5 0 0 0-.5.5V5a.5.5 0 0 0 1 0V2h3a.5.5 0 0 0 .5-.5z"/>
</svg></a></td>
								    </tr>

									<?php
										$a++;
									  }
 										
									 ?>
								  </tbody>
								</table>

								 
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