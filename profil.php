<?php 
include 'data/baglan.php';
include 'header.php';
ob_start();
session_start();
$mail = $_SESSION["uye_mail"];
$sorgu = mysqli_query($conn,"SELECT * FROM uyeler WHERE uye_mail='$mail'");
$cikti = $sorgu->fetch_array();




 ?>

<div class="container icerik">
  
  <div class="row profil ">
      <?php 

      $resim = $cikti['uye_resim'];
      if (empty($resim)) $resim = "default.png";
      

       ?>
    <div class="col-md-4 col-xs-4"><img src="img/<?php echo $resim ; ?>" class="pro-img img-circle" width="100"></div>
    <div class="col-md-8 col-xs-8">

      <p class="pro-isim"><font size="5"><?php echo $cikti['uye_adi']; ?>&nbsp;<?php echo $cikti['uye_soyadi']; ?></font></p>
      <p class="pro-mail"><font size="2"><?php echo $cikti['uye_mail']; ?></p>
      <p class="pro-link"><a href="profil-up.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a> &nbsp;<a href="bildirim.php"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a> &nbsp;<a href="off.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a> </p>

    </div>

  </div>

  <?php 




$bul = mysqli_query($conn,"SELECT sum(puan) FROM puan WHERE puan_mail='$mail'");
$toplam = mysqli_fetch_array($bul);




   ?>
    <div class="row profil2 ">

    <div class="col-md-6 col-xs-6"><font color="#e8214b"><b>Toplam Puan</b></font> <font color="#6f6f6f"> 


        <?php if($toplam[0] <= 0){

          echo '0';

        }else {

          echo $toplam[0];
        } ?>

      </font>
    </div>

<div class="col-md-6 col-xs-6"><font color="#e8214b"><b>Arkadaşlar</b></font> <font color="#6f6f6f">0</font></div> 

  </div>

  <div class="row profil3">
    
    <div class="col-md-12 col-xs-12">
      

      <?php 


      $sorgu = $conn->query("SELECT * FROM puan WHERE puan_mail='$mail'");

        if($conn->errno > 0) { die("<b>Sorgu Hatası:</b>" .$conn->error); }
        
        while ($cikti = $sorgu->fetch_array()){

?>


      <p><span class="glyphicon glyphicon-info-sign pro3-icon" aria-hidden="true"></span><?php echo $cikti["puan_cafe"]; ?>&nbsp;Cafe'de<img src="img/coin.png" class="pro3-coin" width="20"><b><?php echo $cikti["puan"]; ?>&nbsp;Coin&nbsp;</b><?php echo $cikti["puan_durum"]; ?></p>
      
      <?php } ?>

    </div>

  </div>

</div>

<?php


 include 'footer.php'; ?>