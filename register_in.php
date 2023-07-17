<?php include 'data/baglan.php';



if($_POST){

	$isim = $_POST["isim"];
	$soyisim = $_POST["soyisim"];
	$email = $_POST["email"];
	$sifre = $_POST["sifre"];
	$rsifre = $_POST["rsifre"];



	if(!empty($isim) && !empty($soyisim) && !empty($email) && !empty($sifre) && !empty($rsifre)){


		if($sifre != $rsifre){

			echo 'Şifreler Uyuşmuyor';
		}else {


			$ekle = mysqli_query($conn,"INSERT INTO uyeler (uye_adi,uye_soyadi,uye_mail,uye_sifre,uye_r_sifre) 
			VALUES ('$isim','$soyisim','$email','$sifre','$rsifre')");

			if($ekle){

				header("location:login.php");

			}else { echo'Kayıt Başarısız';}
		}




		

	}else { echo 'Alanları boş bırakmayın!';}

}else {


}


 ?>