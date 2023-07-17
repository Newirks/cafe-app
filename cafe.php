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
  

  <div class="row">
    
    <div class="col-md-12 col-xs-12">
      
      <center>

        <p><img src="img/cafe.jpg" class="img-thumbnail" width="180"></p>
        <p><h2><b>Bist Cafe</b></h2></p>
        <p>Bağdat Cad. No 56 / 3A</p>
        <p>Kadıköy / İstanbul</p>
        <p>0(879) 432 43 54 - 0(432) 542 43 32</p>

      </center>

    </div>

  </div>


</div>




<?php
include 'footer.php';
 ?>