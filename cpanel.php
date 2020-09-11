<?php
	include "component/baglanti.php";
	error_reporting(0); //hataları görmezden gelmek için
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cpanel Giriş</title>

	 <?php
	include "component/css/css.php";
	include "component/meta/metatag.php";
	 
?>

<style type="text/css">
	
	html,body{
		background-image: url('./images/cpanel/bg.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		height: 100%;
		font-family: 'Numans', sans-serif;
		}

.card{
height: 270px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.3) !important;
box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

.card:hover{
	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
 
.card-header h3{
color: white;
}
 
.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}
 
.login_btn:hover{
color: black;
background-color: white;
}


</style>
 
</head>
<body>

 <div class="container" style="height: 100%;
align-content: center;">
	<div class="d-flex justify-content-center h-100 animate">
		<div class="card">
			<div class="card-header">
				<h3>cPanel Giriş</h3>
			</div>
			<div class="card-body">
				<form method="post" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Kullanıcı Adı" name="kullaniciAdi" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend"  style="padding-top: 8px;">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Şifre" name="sifre" required>
					</div>
 
					<div class="form-group">
						<input type="submit" value="Giriş" class="btn float-right login_btn" name="giris" style="color: black;
background-color: #FFC312!important;
width: 100px;">
					</div>

				</form>
 					<?php

	 					if (isset($_POST["giris"])) 
						{
							$sql="select * from uygulamabilgi where kullaniciadi ='".$_POST["kullaniciAdi"]."' and sifre='".$_POST["sifre"]."'";
							$result=mysqli_query($baglan,$sql);
							$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
							if(mysqli_num_rows($result) == 1)
							{
								header("Location:component/cpanel/index.php");												 				 
							}
							else
							{
								echo "<span style='color:red'>Hatalı Giriş</span>";
							}
						}
						
 					?>
			</div>

		</div>
	</div>
</div>


 <?php  
	include "component/js/js.php";
?>  
</body>
</html>