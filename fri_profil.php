<?php 
include 'data/baglan.php';
include 'header.php';

ob_start();
session_start();
$mail = $_SESSION["uye_mail"];

$id = $_GET["id"];
$sorgu = mysqli_query($conn,"SELECT * FROM uyeler WHERE uye_id='$id'");
$cikti = $sorgu->fetch_array();
$arkmail = $cikti["uye_mail"];

 ?>




<div class="container icerik">
  
  <div class="row profil ">

    <div class="col-md-4 col-xs-4">

      <?php 

      $resim = $cikti['uye_resim'];
      if (empty($resim)) $resim = "default.png";
      

       ?>

      <img src="img/<?php echo $resim ; ?>" class="pro-img img-circle" width="100">

    </div>
    <div class="col-md-8 col-xs-8">

      <p class="pro-isim"><font size="5"><?php echo $cikti['uye_adi']; ?>&nbsp;<?php echo $cikti['uye_soyadi']; ?></font></p>
      <p class="pro-mail"><font size="2"><?php echo $cikti['uye_mail']; ?></p>

 <?php 

        $sorgu = mysqli_query($conn,"SELECT * FROM istek WHERE istek_kim ='$mail' and istek_kime = '$arkmail'");
        $cikti = $sorgu->fetch_array();
        $onay = $cikti["istek_onay"];
        $istek_kim = $cikti["istek_kim"];
        $istek_kime = $cikti["istek_kime"];

        if($istek_kim == $mail && $istek_kime == $arkmail){


          if($onay == 0){

            echo ' <form action="" method="POST">
         <p ><input type="submit" name="submit2" class="fri-buton-ic" value="İptal Et"> 
          <a href=""><input type="button"  class="fri-buton-ic" value="Mesaj Gönder"></a>
          </p>
          </form>';

          }elseif($onay == 1){

            echo '<form action="" method="POST">
         <p ><input type="submit" name="submit3" class="fri-buton-ic" value="Çıkar"> 
          <a href=""><input type="button"  class="fri-buton-ic" value="Mesaj Gönder"></a>
          </p>
          </form>';
          }

          

        }else {


                  if($_POST["submit1"]){



   



          $ekle = mysqli_query($conn,"INSERT INTO istek (istek_kim,istek_kime,istek_onay) 
          VALUES ('$mail','$arkmail',0)");
          if($ekle){ echo '<form action="" method="POST">
         <p ><input type="submit" name="submit2" class="fri-buton-ic" value="İptal Et"> 
          <a href=""><input type="button"  class="fri-buton-ic" value="Mesaj Gönder"></a>
          </p>
          </form>';} else { echo 'başarısız'; }


               


   }else {   echo '

          <form action="" method="POST">
         <p ><input type="submit" name="submit1" class="fri-buton-ic" value="Arkadaş Ekle"> 
          <a href=""><input type="button"  class="fri-buton-ic" value="Mesaj Gönder"></a>
          </p>
          </form>';

         
           }



        }

if($_POST["submit2"]){

  $sil = mysqli_query($conn,"DELETE FROM istek WHERE istek_kim ='$mail' and istek_kime = '$arkmail'");


  }
if($_POST["submit3"]){

  $sil = mysqli_query($conn,"DELETE FROM istek WHERE istek_kim ='$mail' and istek_kime = '$arkmail'");


  }

        
 ?>



    </div>

  </div>



  <?php 


        $sorgu2 = mysqli_query($conn,"SELECT * FROM puan WHERE  puan_mail = '$arkmail'");
        $cikti2 = $sorgu2->fetch_array();

        $puan = $cikti2["puan"];


   ?>

   
    <div class="row profil2 ">

    <div class="col-md-6 col-xs-6"><font color="#e8214b"><b>Toplam Puan</b></font> <font color="#6f6f6f"><?php echo $puan; ?></font>
    </div>

<div class="col-md-6 col-xs-6"><font color="#e8214b"><b>Arkadaşlar</b></font> <font color="#6f6f6f">0</font></div> 

  </div>



</div>




 <?php include 'footer.php'; ?>