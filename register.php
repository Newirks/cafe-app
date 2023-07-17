<?php include 'login-header.php';

ob_start();
session_start();
 ?>




<?php 

if(isset($_SESSION["oturum"])){

    header("location:index.php");
  }

  if(!isset($_SESSION["oturum"])){

    echo '<div class="container register">
  

  <div class="row">
    
    <div class="col-md-12 col-xs-12">
      
     <center>
      <form action="register_in.php" method="POST">
      <table class="register-tas">
        <tr>
          <td class="login-baslik"><img src="img/logo.png" width="200"></td>
        </tr>
        <tr>
          <td class="login-kadi"><input type="text" name="isim" class="login-kadi-ic" placeholder="İsim"></td>
        </tr>
                <tr>
          <td class="login-kadi"><input type="text" name="soyisim" class="login-kadi-ic" placeholder="Soyisim"></td>
        </tr>
        <tr>
          <td class="login-kadi"><input type="text" name="email" class="login-kadi-ic" placeholder="E-mail Adres"></td>
        </tr>
        <tr>
          <td class="login-ksifre"><input type="password" name="sifre" class="login-ksifre-ic" placeholder="Şifre"></td>
        </tr>
          <tr>
          <td class="login-ksifre"><input type="password" name="rsifre" class="login-ksifre-ic" placeholder="Şifre Tekrar"></td>
        </tr>
         <tr>
          <td class="login-kbuton"><input type="submit" value="Kayıt Ol" class="login-kbuton-ic"></td>
        </tr>
         <tr>
          <td class="login-kbuton"><a href="login.php"><input type="button" value="Hemen Giriş Yap" class="login-kbuton-ic"></a></td>
        </tr>
          <tr>
          <td class="login-face"><a href="#"><img src="img/face.png" width="200"></a></td>

        </tr>
      </table>
    </form>
      </center>


    </div>

  </div>


</div>';
  }


 ?>

<?php include 'login-footer.php'; ?>