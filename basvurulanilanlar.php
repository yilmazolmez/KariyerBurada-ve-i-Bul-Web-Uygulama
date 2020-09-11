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
		<title>Başvurulan İlanlar</title>
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
									<legend><h2>Başvurulan İlanlar</h2></legend>
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col"> </th>
								      <th scope="col">Firma</th>
								      <th scope="col">Meslek</th>
								      <th scope="col">Açıklama</th>
								      <th scope="col">Başvuru Tarihi</th>
								      <th scope="col">Başvuru İptal</th>
								    </tr>
								  </thead>
								  <tbody>
								  	 
						 			
 	
								  	<?php
								 
									$sql="select * from uyefirmaisilanbasvurubilgi where uyecvno='".$_SESSION["id"]."'";
									$result=mysqli_query($baglan,$sql);
									$a=1;
									if (mysqli_num_rows($result) == 0) {
										    echo "<span>Başvurunuz bulunmamaktadır.</span>";
										    
										}
									while($sonuc=mysqli_fetch_assoc($result))
									{
								?>
								    <tr>
								      <th scope="row"><?php echo $a; ?></th>
								      <td><b><?php echo $sonuc["uyefirmaunvani"]; ?></b></td>
								      <td><?php echo $sonuc["meslek"]; ?></td>
								      <td><?php echo $sonuc["isaciklamasi"]; ?></td>
								      <td><?php echo $sonuc["basvurutarihi"]; ?></td>
								      <td><a href="basvurulanilanlar.php?id=<?php echo $sonuc['isilanbasvuruno']; ?>" name="sil" style="color: red;"> <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.854 4.854a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
									</svg> </a>	
									</td>
								    </tr>

									<?php
										$a++;
									  }
 										if($_GET)
											{
										 
														$sql = "DELETE from uyefirmaisilanbasvurubilgi where isilanbasvuruno ='".$_GET["id"]."'";
														$sonuc= mysqli_query($baglan,$sql);
														if($sonuc) 
														{ 			
															 
															header("refresh:1,url=basvurulanilanlar.php#git");						 					
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