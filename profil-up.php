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
            <?php 

      $resim = $cikti['uye_resim'];
      if (empty($resim)) $resim = "default.png";
      

       ?>
      <p class="profil-img"><img src="img/<?php echo $resim ; ?>" class="icerik-profil img-circle" width="150"></p>
      <p class="profil-img-duz"><a href="#">Profil Resmini Düzenle</a></p>
      <p class="profil-isim"><b><font size="3"><?php echo $cikti['uye_adi']; ?>&nbsp;<?php echo $cikti['uye_soyadi']; ?></font></b>&nbsp;<a href="update.php">Düzenle</a></p>
      <p class="profil-mail"><b><font size="3"><?php echo $cikti['uye_mail']; ?></font></b>&nbsp;<a href="update.php">Düzenle</a></p>
      <p class="profil-sifre"><b><font size="3"><?php echo $cikti['uye_sifre']; ?></font></b>&nbsp;<a href="update.php">Düzenle</a></p>
      <p class="profil-is"><a href="#">Son İşlemler</a></p>
      <p class="profil-cik"><a href="off.php">Hesasptan Çık</a></p>
      <p class="profil-sil"><a href="#">Hesabı Sil</a></p>


    </div>

  </div>

</div>

<?php include 'footer.php'; ?>