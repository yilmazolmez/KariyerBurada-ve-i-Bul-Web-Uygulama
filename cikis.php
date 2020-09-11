<?php
 					 
 					include "component/baglanti.php";
				 	 	

 					$sql1="select * from uygulamalog where id='".$_SESSION["id"]."' and tur='".$_SESSION["login"]."' order by loginno desc limit 1";
					$result1=mysqli_query($baglan,$sql1);
					$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);

					date_default_timezone_set('Europe/Istanbul');
					$zaman = date('Y-m-d H:i:s');
					
 					mysqli_query($baglan,"update uygulamalog set logoutzamani='".$zaman."' where loginno=".$row1['loginno']."");

					session_destroy();
					header("location: index.php");
			 
		?>