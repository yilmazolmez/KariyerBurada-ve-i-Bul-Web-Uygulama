
<!-- Üye Giriş -->
<div id="uye-giris" class="modal">
	<form class="modal-content animate" action="" method="post">
		<div class="imgcontainer">
			<span onclick="document.getElementById('uye-giris').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src="images/login/avatar.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label for="uname"><b>E-Mail</b></label>
			<input type="text" placeholder="E-mail giriniz" name="mail" required>

			<label for="psw"><b>Şifre</b></label>
			<input type="password" placeholder="Şifrenizi giriniz" name="sifre" required>

			<button type="submit" class="loginbuton" name="giris" style="background-color: #89ba16">Giriş</button>
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<div class="row">
				<div class="col-md-3">
					<button type="button" onclick="document.getElementById('uye-giris').style.display='none'" class="cancelbtn loginbuton" style="background-color: red;">Cancel</button> 
				</div>
				<div class='col-md-6'>
					<?php

					if (isset($_POST["giris"])) 
					{

						$sql1="select * from uyecvbilgi where uyecveposta ='".$_POST["mail"]."' and uyecvsifre='".$_POST["sifre"]."'";
						$result1=mysqli_query($baglan,$sql1);
						$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);

						$sql2="select * from uyefirmabilgi where uyefirmaeposta='".$_POST["mail"]."' and uyefirmasifre='".$_POST["sifre"]."'";
						$result2=mysqli_query($baglan,$sql2);
						$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);

						if(mysqli_num_rows($result1) == 1)
						{
							$_SESSION["login"]="uye";
							$_SESSION["id"]=$row1["uyecvno"];
							$_SESSION["adsoyad"]=$row1["uyecvadisoyadi"];
							mysqli_query($baglan,"insert into uygulamalog(loginkullaniciadi,id,tur)values('".$_SESSION["adsoyad"]."','".$_SESSION["id"]."','".$_SESSION["login"]."')");

							header("Location:index.php");												 				 
						}
						else if (mysqli_num_rows($result2) == 1) {
							$_SESSION["login"]="firma";
							$_SESSION["arttirma"]="false";
							$_SESSION["cvkisi_id"]=0;
							$_SESSION["id"]=$row2["uyefirmano"];
							$_SESSION["unvan"]=$row2["uyefirmaunvani"];
							mysqli_query($baglan,"insert into uygulamalog(loginkullaniciadi,id,tur)values('".$_SESSION["unvan"]."','".$_SESSION["id"]."','".$_SESSION["login"]."')");
							header("Location:index.php");	
						}
						else
						{
 							echo "<script>window.onload = function() {
									document.getElementById('uye-giris').style.display='block';
								}
								</script>";
							echo "<span style='color:red;' id='sifrekontrol'>Mail veya şifreyi kontrol ediniz...</span>";
						}
					}

					echo "<span style='color:green;display:none;float:lef;font-size:15px;' id='giris'>Üye kayıt başarılı.Giriş yapınız.</span></div>";
					?>	

					<div class="col-md-3">
						<span class="psw"> <a href="sifremiunuttum.php#git"> Şifremi unuttum</a></span>
					</div>
				</div>
			</div>
		</form>
	</div>

	<!-- Üye Giriş -->

