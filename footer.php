      <nav class="navbar navbar-default navbar-fixed-bottom footer">
    <div class="container">
      <div class="row">

<div class="col-md-2 col-xs-2"><a href="index.php"><span class="glyphicon glyphicon-home alt-icon" aria-hidden="true"></span></a></div>

<div class="col-md-2 col-xs-2"><a href="qrcode.php"><span class="glyphicon glyphicon-qrcode alt-icon" aria-hidden="true"></span></a></div>
      <?php 

      $resim = $cikti['uye_resim'];
      if (empty($resim)) $resim = "default.png";
      

       ?>
<div class="col-md-4 col-xs-4"><a href="profil.php"><img src="img/<?php echo $resim ; ?>" class="alt-profil img-circle" width="35"></a></div>

<div class="col-md-2 col-xs-2"><a href="mesaj.php"><span class="glyphicon glyphicon-envelope alt-icon" aria-hidden="true"></span></a></div>

<div class="col-md-2 col-xs-2"><a href="search.php"><span class="glyphicon glyphicon-search alt-icon" aria-hidden="true"></span></a></div>
           
         </div>
    </div>
    </nav>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

