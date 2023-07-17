<?php include 'data/baglan.php'; include 'header.php';
ob_start();
session_start();


if($_POST){

	$mail = $_SESSION["uye_mail"];
	$puan = $_POST["puan"];
	$dizi = explode (",",$puan);

	$apuan = $dizi[0];
	$pcafe = $dizi[1];
	$pdurum = $dizi[2];







	$ekle = mysqli_query($conn,"INSERT INTO puan (puan_mail,puan,puan_cafe,puan_durum) 
			VALUES ('$mail','$apuan','$pcafe','$pdurum')");

	if($ekle){

		echo 'başarılı';
	}else {

		echo 'başarısız!!';
	}

}



?>




<form action="" method="POST">
	
	<input type="text" name="puan">
	<input type="submit" name="Gönder">

</form>


<?php include 'footer.php'; ?>