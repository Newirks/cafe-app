<?php include 'header.php';
      include 'data/baglan.php';
ob_start();
session_start();


$mail = $_SESSION["uye_mail"];
$sorgu = mysqli_query($conn,"SELECT * FROM uyeler WHERE uye_mail='$mail'");
$cikti = $sorgu->fetch_array();

 ?>

<div class="container icerik">
  
  <div class="row profil">
    
    <div class="col-md-4 col-md-offset-4">
      
      <p class="profil-img"><img src="img/profil.jpg" class="icerik-profil img-circle" width="150"></p>
      <p class="profil-img-duz"><a href="#">Profil Resmini Düzenle</a></p>
      <form action="" method="POST">
      <p class="profil-isim-up"><center><input type="text" name="uye_adi" value="<?php echo $cikti["uye_adi"];?>" class="profil-isim-up-ic"><input type="text" name="uye_soyadi" value="<?php echo $cikti["uye_soyadi"];?>" class="profil-isim-up-ic"></center></p>

      <p class="profil-isim-up"><center><input type="text" name="uye_mail" value="<?php echo $cikti["uye_mail"];?>" class="profil-isim-up-ic2"></center></p>

      <p class="profil-isim-up"><center><input type="text" name="uye_sifre" value="<?php echo $cikti["uye_sifre"];?>" class="profil-isim-up-ic2"></center></p>
      
            <p class="profil-isim-up"><center><input type="text" name="uye_r_sifre" value="<?php echo $cikti["uye_r_sifre"];?>" class="profil-isim-up-ic2"></center></p>

      <p class="profil-isim-up"><center><input type="submit"  value="Bilgileri Güncelle" class="profil-isim-up-ic3"></center></p>
    </form>

    </div>

  </div>

</div>

<?php include 'footer.php'; ?>