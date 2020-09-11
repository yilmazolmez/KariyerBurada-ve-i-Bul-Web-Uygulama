<div class="container">
	<div class="row p-5">
		<div class="col-md-6">
			<div class="list-group" style="margin-bottom: 10px;">
				<a href="#" class="list-group-item list-group-item-action active" style="border:0px;background-color: #89ba16;">
					<h3> Yeni İş İlanları </h3>
				</a>
				<?php
								$sql = "select * from uyefirmaisilanbilgi order by isilanno  desc limit 0,5";
								$sorgu=mysqli_query($baglan,$sql);
								while( $sonuc=mysqli_fetch_assoc($sorgu))
								{
				?>
				<a href="ilandetay.php?id=<?php echo $sonuc['isilanno']; ?>" class="list-group-item list-group-item-action" target="_blank">
					<strong><?php echo $sonuc["meslek"]; ?></strong> <br>
					<span><?php echo $sonuc["uyefirmaunvani"]; ?> <small><?php echo $sonuc["issehir"]; ?></small></span></a>
				<?php
					}
				?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action active" style="border:0px;background-color: #89ba16;">
					<h3> Acil İş İlanları</h3>
				</a>
				<?php
								$sql = "select * from uyefirmaisilanbilgi where tur like '%acil%' order by isilanno  desc limit 0,5";
								$sorgu=mysqli_query($baglan,$sql);
								while( $sonuc=mysqli_fetch_assoc($sorgu))
								{
				?>
				<a href="ilandetay.php?id=<?php echo $sonuc['isilanno']; ?>" target="_blank" class="list-group-item list-group-item-action">
					<strong><?php echo $sonuc["meslek"]; ?></strong> <br>
					<span><?php echo $sonuc["uyefirmaunvani"]; ?> <small><?php echo $sonuc["issehir"]; ?></small></span></a>
				<?php
					}
				?>
				 
			</div>
		</div>
	</div>
</div>