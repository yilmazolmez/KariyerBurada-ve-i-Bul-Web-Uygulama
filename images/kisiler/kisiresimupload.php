<?php

	include "conn.php";

  $id = $_POST['id'];
  $image = $_POST['image'];
  $name = $_POST['name'];
  $yol=$_POST['yol'];
  $realImage = base64_decode($image);

      file_put_contents($name, $realImage);
  echo "Resim Gonderme Basarili";

 	$queryResult=mysqli_query($connect,"update uyecvbilgi set uyecvresim2='".$yol."'  where uyecvno='".$id."'");

?>

