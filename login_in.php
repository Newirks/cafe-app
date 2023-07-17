<?php include 'data/baglan.php';

session_start();

if($_POST){

	$kmail = $_POST['kmail'];
	$ksifre = $_POST['ksifre'];

	$bul = mysqli_query($conn,"SELECT uye_mail,uye_sifre FROM uyeler WHERE uye_mail='$kmail' and uye_sifre='$ksifre'");
	$say = mysqli_num_rows($bul);
	if($say > 0) {


		$goster = mysqli_fetch_array($bul);
		$_SESSION["oturum"] = true;
		$_SESSION["uye_mail"] = $kmail;
		$_SESSION["uye_sifre"] = $ksifre;
		$_SESSION["uye_mail"] = $goster["uye_mail"];

		
	}else {echo 'Tekrar Deneyiniz!';}
	
 }else {


 	if(isset($_SESSION["oturum"])){

 		header("location:index.php");
 	}

 	if(!isset($_SESSION["oturum"])){

 		echo '<div class="container login">
  

  <div class="row">
    
    <div class="col-md-12 col-xs-12">
      
     <center>
      <form action="login_in.php" method="POST">
      <table class="login-tas">
        <tr>
          <td class="login-baslik"><img src="img/logo.png" width="200"></td>
        </tr>
        <tr>
          <td class="login-kadi"><input type="text" name="kmail" class="login-kadi-ic" placeholder="E-mail Adres"></td>
        </tr>
        <tr>
          <td class="login-ksifre"><input type="password" name="ksifre" class="login-ksifre-ic" placeholder="Şifre"></td>
        </tr>
         <tr>
          <td class="login-kbuton"><input type="submit" value="Giriş" class="login-kbuton-ic"></td>
        </tr>
        <tr>
          <td class="login-link"><a href="#">Şifre mi Unuttum ?</a>&nbsp;/&nbsp;<a href="register.php">Kayıt Ol!</a></td>

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

 }


?>