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


      <?php  

    $mail = $_SESSION["uye_mail"];



        $sorgu4 = $conn->query("SELECT * FROM cafe ");
        $cikti4 = $sorgu4->fetch_array();

        $cafeid = $cikti4["cafe_id"];

        $sorgu = $conn->query("SELECT * FROM istek WHERE istek_onay = '1' and istek_kim = '$mail' ");

        


        
        while ($cikti = $sorgu->fetch_array()){ 

          $kime = $cikti["istek_kime"];
          $onay = $cikti["istek_onay"];

          $sorgu2 = $conn->query("SELECT * FROM uyeler WHERE uye_mail = '$kime' ");
          $cikti2 = $sorgu2->fetch_array();

          $adi = $cikti2["uye_adi"];
          $soyadi = $cikti2["uye_soyadi"];

          $sorgu3 = $conn->query("SELECT * FROM puan WHERE puan_mail = '$kime' ");
          $cikti3 = $sorgu3->fetch_array();

          $puan = $cikti3["puan"];
          $cafe = $cikti3["puan_cafe"];
          $durum = $cikti3["puan_durum"];
          $tarih = $cikti3["puan_tarih"];
          ?>

             

  <div class="row">
    
    <div class="col-md-12 col-xs-12">
      
      <div class="row icerik-ust">
        <div class="col-md-1 col-xs-1">
                <?php 

      $resim = $cikti2['uye_resim'];
      if (empty($resim)) $resim = "default.png";
      

       ?>
        <img src="img/<?php echo $resim ; ?>" class="icerik-profil img-circle" width="35">
      </div>
      <div class="col-md-11 col-xs-11 icerik-ust-isim">
        <p class="icerik-ust-ust"><a href="fri_profil.php?id=<?php echo $cikti2['uye_id']  ; ?>"><?php echo $adi; ?>&nbsp;<?php echo $soyadi; ?></a> - <a href="cafe.php?id=<?php echo $cafeid  ; ?>"><?php echo $cafe; ?>&nbsp;Cafe'de</a></p>
        <p class="icerik-ust-alt"><?php 


          date_default_timezone_set('Europe/Istanbul'); 
          $guncelTarih=date("Y-m-d h:i:sa",time()); 
          $fark = strtotime($guncelTarih) - strtotime($tarih); 

          if ($fark == 0 || $fark <= 59){ echo 'Bir Kaç Saniye Önce'; }
          elseif($fark == 60 || $fark <= 119){ echo '1 Dakika Önce'; }
          elseif ($fark == 120 || $fark <= 179){ echo '2 Dakika Önce'; }
          elseif ($fark == 180 || $fark <= 239 ){ echo '3 Dakika Önce'; }
          elseif ($fark == 240 || $fark <= 299){ echo '4 Dakika Önce'; }
          elseif ($fark == 300 || $fark <= 359){ echo '5 Dakika Önce'; }
          elseif ($fark == 360 || $fark <= 419){ echo '6 Dakika Önce'; }
          elseif ($fark == 420 || $fark <= 479){ echo '7 Dakika Önce'; }
          elseif ($fark == 480 || $fark <= 539){ echo '8 Dakika Önce'; }
          elseif ($fark == 540 || $fark <= 599){ echo '9 Dakika Önce'; }
          elseif ($fark == 600 || $fark <= 899){ echo '10 Dakika Önce'; }
          elseif ($fark == 900 || $fark <= 1199){ echo '15 Dakika Önce'; }
          elseif ($fark == 1200 || $fark <= 1799){ echo '20 Dakika Önce'; }
          elseif ($fark == 1800 || $fark <= 2399){ echo '30 Dakika Önce'; }
          elseif ($fark == 2400 || $fark <= 3599){ echo '40 Dakika Önce'; }
          elseif ($fark == 3600 || $fark <= 7199 ){ echo '1 Saat Önce'; }
          elseif ($fark == 7200 || $fark <= 10799 ){ echo '2 Saat Önce'; }
          elseif ($fark == 10800 || $fark <= 14399){ echo '3 Saat Önce'; }
          elseif ($fark == 14400 || $fark <= 17999 ){ echo '4 Saat Önce'; }
          elseif ($fark == 18000 || $fark <= 21599 ){ echo '5 Saat Önce'; }
          elseif ($fark == 21600 || $fark <= 25199 ){ echo '6 Saat Önce'; }
          elseif ($fark == 25200 || $fark <= 28799 ){ echo '7 Saat Önce'; }
          elseif ($fark == 28800 || $fark <= 32399 ){ echo '8 Saat Önce'; }
          elseif ($fark == 32400 || $fark <= 35999 ){ echo '9 Saat Önce'; }
          elseif ($fark == 36000 || $fark <= 39599 ){ echo '10 Saat Önce'; }
          elseif ($fark == 39600 || $fark <= 43199 ){ echo '11 Saat Önce'; }
          elseif ($fark == 43200 || $fark <= 46799 ){ echo '12 Saat Önce'; }
          elseif ($fark == 46800 || $fark <= 50399 ){ echo '13 Saat Önce'; }
          elseif ($fark == 50400 || $fark <= 53999 ){ echo '14 Saat Önce'; }
          elseif ($fark == 54000 || $fark <= 57599 ){ echo '15 Saat Önce'; }
          elseif ($fark == 57600 || $fark <= 61199 ){ echo '16 Saat Önce'; }
          elseif ($fark == 61200 || $fark <= 64799 ){ echo '17 Saat Önce'; }
          elseif ($fark == 64800 || $fark <= 68399 ){ echo '18 Saat Önce'; }
          elseif ($fark == 68400 || $fark <= 71999 ){ echo '19 Saat Önce'; }
          elseif ($fark == 72000 || $fark <= 75599 ){ echo '20 Saat Önce'; }
          elseif ($fark == 75600 || $fark <= 79199 ){ echo '21 Saat Önce'; }
          elseif ($fark == 79200 || $fark <= 82799 ){ echo '22 Saat Önce'; }
          elseif ($fark == 82800 || $fark <= 86399 ){ echo '23 Saat Önce'; }
          elseif ($fark == 86400 || $fark <= 172799 ){ echo '1 Gün Önce'; }
          elseif ($fark == 172800 || $fark <= 259199 ){ echo '2 Gün Önce'; }
          elseif ($fark == 259200 || $fark <= 345599 ){ echo '3 Gün Önce'; }
          elseif ($fark == 345600 || $fark <= 431999 ){ echo '4 Gün Önce'; }
          elseif ($fark == 432000 || $fark <= 518399 ){ echo '5 Gün Önce'; }
          elseif ($fark == 518400 || $fark <= 604799 ){ echo '6 Gün Önce'; }
          elseif ($fark == 604800 || $fark <= 1209599 ){ echo '1 Hafta Önce'; }
          elseif ($fark == 1209600 || $fark <= 1814399 ){ echo '2 Hafta Önce'; }
          elseif ($fark == 1814400 || $fark <= 2419199 ){ echo '3 Hafta Önce'; }
          elseif ($fark == 2419200 || $fark <= 4838399 ){ echo '1 Ay Önce'; }
          elseif ($fark == 4838400 || $fark <= 7257599 ){ echo '2 Ay Önce'; }
          elseif ($fark == 7257600 || $fark <= 9676799 ){ echo '3 Ay Önce'; }
          elseif ($fark == 9676800 || $fark <= 12095999 ){ echo '4 Ay Önce'; }
          elseif ($fark == 12096000 || $fark <= 14515199 ){ echo '5 Ay Önce'; }
          elseif ($fark == 14515200 || $fark <= 16934399 ){ echo '6 Ay Önce'; }
          elseif ($fark == 16934400 || $fark <= 19353599 ){ echo '7 Ay Önce'; }
          elseif ($fark == 19353600 || $fark <= 21772799 ){ echo '8 Ay Önce'; }
          elseif ($fark == 21772800 || $fark <= 24191999 ){ echo '9 Ay Önce'; }
          elseif ($fark == 24192000 || $fark <= 26611199 ){ echo '10 Ay Önce'; }
          elseif ($fark == 26611200 || $fark <= 29030399 ){ echo '11 Ay Önce'; }
          elseif ($fark == 29030400 ){ echo '1 Yıl Önce'; }
          elseif ($fark >= 29030401){ echo 'Bir Kaç Yıl Önce'; }




         ?></p>

      </div>
      </div>
      
      <div class="row icerik-img">
        <div class="col-md-12 col-xs-12">
        <img src="img/konum.jpg"  width="100%">
      </div>
      </div>

      <div class="row icerik-alt">
        <div class="col-md-9 col-xs-9 ">
        <img src="img/coin.png" class="icerik-alt-img" width="30"> <?php echo $puan; ?> COİN <?php echo $durum; ?></div>
        <div class="col-md-3 col-xs-3">
          <a href="#"><span class="glyphicon glyphicon-heart-empty begen" aria-hidden="true"></span></a></div>
      </div>

    </div>

  </div>

<?php }  ?>


</div>

<?php include 'footer.php'; ?>