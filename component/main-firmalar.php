<div class="container">
	<div class="row p-5">
		<div class="col-md-12">
			<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

				<!--Controls-->
				<div class="controls-top" style="text-align: center;margin-bottom: 15px;">
					<span><a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left" style="width: 30px;background-color: #89ba16;height: 30px;padding-top: 7px;border-radius: 100px;color: white;"></i></a></span>
					<a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right" style="width: 30px;background-color: #89ba16;height: 30px;padding-top: 7px;border-radius: 100px;color: white;"></i></a>
				</div>
				<!--/.Controls-->
				<!--Slides-->
				<div class="carousel-inner" role="listbox">

					<!--First slide-->
					<div class="carousel-item active">
						<?php
								$sql = "select * from uyefirmabilgi order by uyefirmano  desc limit 0,4";
								$sorgu=mysqli_query($baglan,$sql);
								while( $sonuc=mysqli_fetch_assoc($sorgu))
								{
							?>
								<div class="col-md-3" style="float:left">
									<div class="card mb-2">
										<div style="width:100%;
											background-image: url('<?php echo $sonuc['uyefirmaresim2'] ?>');
											background-position: center center;
											height: 200px;
											background-repeat: no-repeat;
											background-size: cover;
											">
											</div>
										<!-- <img class="card-img-top" src="<?php echo $sonuc['uyefirmaresim2']; ?>" alt="Card image cap"> -->
										<div class="card-body">
											<h4 class="card-title" style="overflow: hidden; /* taşanları gizle */
    white-space: nowrap; /* alt satıra hiç inme */
    text-overflow: ellipsis;"><?php echo $sonuc["uyefirmaunvani"]; ?></h4>
											<p class="card-text">İş arkadaşları arıyoruz :)</p>
											<a href="ilanara.php?unvan=&sehirler=&tur=&firma=<?php echo $sonuc['uyefirmaunvani']; ?>" class="btn btn-success" style="background-color: #89ba16;cursor: pointer;border: 0px;">İş İlanlarına Git</a>
										</div>
									</div>
								</div>
							<?php

								}
							?>
 
					</div>
					<!--/.First slide-->

					<!--Second slide-->
					<div class="carousel-item">

						 <?php
								$sql1 = "select * from uyefirmabilgi order by uyefirmano  desc limit 4,4";
								$sorgu1=mysqli_query($baglan,$sql1);
								while( $sonuc1=mysqli_fetch_assoc($sorgu1))
								{
							?>
								<div class="col-md-3" style="float:left">
									<div class="card mb-2">
										
										<div style="width:100%;
											background-image: url('<?php echo $sonuc1['uyefirmaresim2'] ?>');
											background-position: center center;
											height: 200px;
											background-repeat: no-repeat;
											background-size: cover;
											">
											</div>
										<!-- <img class="card-img-top" src="<?php echo $sonuc1['uyefirmaresim2']; ?>" alt="Card image cap"> -->
										<div class="card-body">
											<h4 class="card-title"><?php echo $sonuc1["uyefirmaunvani"]; ?></h4>
											<p class="card-text">İş arkadaşları arıyoruz :)</p>
											<a href="ilanara.php?unvan=&sehirler=&tur=&firma=<?php echo $sonuc1['uyefirmaunvani']; ?>" class="btn btn-success" style="background-color: #89ba16;cursor: pointer;border: 0px;">İş İlanlarına Git</a>
										</div>
									</div>
								</div>
							<?php

								}
							?>

					</div>
					<!--/.Second slide-->



				</div>
				<!--/.Slides-->

			</div>
			<!--/.Carousel Wrapper-->
		</div>
	</div>
</div>