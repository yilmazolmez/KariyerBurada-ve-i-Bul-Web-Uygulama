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
		<title>İlanlarım</title>
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
									<legend><h2>İlanlarım</h2></legend>
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col"> </th>
								      <th scope="col">Meslek</th>
								      <th scope="col">Açıklama</th>
								      <th scope="col">Başvuru Başlangıç Tarihi</th>
								      <th scope="col">Başvuru Bitiş Tarihi</th>
								      <th scope="col">Başvuran Kişileri Gör</th>
								      <th scope="col">Başvuru İptal</th>
								    </tr>
								  </thead>
								  <tbody>
								  	 
						 			
 	
								  	<?php
								 
									$sql="select * from uyefirmaisilanbilgi where uyefirmano='".$_SESSION["id"]."' order by isilanno desc";
									$result=mysqli_query($baglan,$sql);
									$a=1;
									if (mysqli_num_rows($result) == 0) {
										    echo "<span>İlan bulunmamaktadır.</span>";
										    
										}
									while($sonuc=mysqli_fetch_assoc($result))
									{
								?>
								    <tr>
								      <th scope="row"><?php echo $a; ?></th>
								      <td><b><?php echo $sonuc["meslek"]; ?></b></td>
								      <td><?php echo $sonuc["isaciklamasi"]; ?></td>
								      <td><?php echo $sonuc["isbasvurubaslamatarihi"]; ?></td>
								      <td <?php $date=date('Y-m-d'); if($sonuc["isbasvurubitistarihi"]<$date) echo "style=background-color:#B22222;";?>><?php echo $sonuc["isbasvurubitistarihi"]; ?></td>
								      <td style="    text-align: center;"><a href="ilan-basvuranlar.php?id=<?php echo $sonuc['isilanno']; ?>#git" target="_blank" style="color: green;">
										<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
										  <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
										  <path fill-rule="evenodd" d="M10.854 7.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 10.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
										</svg></a></td>
								      <td style="    text-align: center;"><a href="ilanlarim.php?id=<?php echo $sonuc['isilanno']; ?>" name="sil" style="color: red;"> <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.854 4.854a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
									</svg> </a>	
									</td>
								    </tr>

									<?php
										$a++;
									  }
 										 if($_GET)
											{
										 
														$sql = "DELETE from uyefirmaisilanbilgi where isilanno  ='".$_GET["id"]."'";
														$sonuc= mysqli_query($baglan,$sql);
														if($sonuc) 
														{ 			
															 
															header("refresh:1,url=ilanlarim.php#git");						 					
														}
														else
														{

															echo "Bir problem oluştu, verileri kontrol ediniz";
														}	
											 	
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