<?php include 'header.php'; 
include 'data/baglan.php';
ob_start();
session_start();


if( !isset($_SESSION['uye_mail']) ) {
  header("Location: login.php");
  exit;
 }




 ?>

<div class="container icerik">
  
  <div class="row">
    
    <div class="col-md-12 col-xs-12">
      <center>
        <form action="" method="POST">
      <input type="text" class="arama" name="arama" placeholder="Aranacak Kelime !">
        </form>
    </center>
    </div>

  </div>

    <div class="row">
    
    <div class="col-md-12 col-xs-12">

      <p class="arama-baslik"><span class="glyphicon glyphicon-search arama-icon" aria-hidden="true"></span>Son Arananlar</p>

      <?php if($_POST){

  $ara = $_POST["arama"];

    $sql = mysqli_query($conn,"SELECT * FROM uyeler WHERE uye_adi LIKE '%$ara%'");

    $bul = mysqli_num_rows($sql);

      if($bul > 0) {
        while($yaz=mysqli_fetch_array($sql)) {

        $id = $yaz["uye_id"];  
        $adi = $yaz['uye_adi'];
        $soyadi = $yaz["uye_soyadi"];
        
        ?>

      <?php 

      $resim = $cikti['uye_resim'];
      if (empty($resim)) $resim = "default.png";
      

       ?>
          <p class="arama-kisi"><img src="img/<?php echo $resim ; ?>" class="img-circle arama-img" width="30"><a href="fri_profil.php?id=<?php echo $id  ; ?>"><?php echo $adi ; ?>&nbsp;<?php echo $soyadi ; ?></a></p>


        <?php

         }

}else { echo '<p class="arama-kisi">Herhangi Sonuç Bulunamadı !</p>';



}
} ?>

      


    </div>

  </div>





</div>


<?php include 'footer.php'; ?>