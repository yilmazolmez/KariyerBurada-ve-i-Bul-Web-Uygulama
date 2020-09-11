
<div class="container main-kisiler-hover">
	<div class="row" style="margin-top: -70px;">

		<?php
			$sql = "select * from uyecvbilgi order by uyecvno  desc limit 0,4";
			$sorgu=mysqli_query($baglan,$sql);
			while($sonuc=mysqli_fetch_assoc($sorgu))
			{
		?>
		<div class="col-md-3">
			 
				<div class="card shadow mb-5 shadow mb-5">
					
					
						<div style="width:100%;
						background-image: url('<?php echo $sonuc['uyecvresim2'] ?>');
						background-position: center center;
						height: 200px;
						background-repeat: no-repeat;
						background-size: cover;
						">
							<!-- <img class="card-img-top" src="<?php echo $sonuc['uyecvresim2'] ?>" alt="Card image cap" style=""> -->
						</div>
					<div class="card-body">
						<h5 class="card-title"><?php echo $sonuc['uyecvadisoyadi'] ?></h5>
						<h6 class="card-text"><?php echo $sonuc['uyecvsehir'] ?></h6>
						<p class="card-text"><?php echo $sonuc['uyecvmeslekunvani'] ?></p>
														<?php
															if($_SESSION["login"]=="firma"){
														?>
															<span>
																<button class="loginbuton" onclick="window.open('cvgoster.php?id=<?php echo $sonuc['uyecvno']?>#git')" style="background-color: #89ba16;">CV Görüntüle</button>
															</span>
														<?php
														 }
														?>
					</div>
				</div>
			 
		</div>
		<?php
			}
		?>
	</div>
</div>

 