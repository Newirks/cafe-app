<?php
include 'data/baglan.php';
ob_start();
session_start();


if( !isset($_SESSION['uye_mail']) ) {
  header("Location: login.php");
  exit;
 }

 		$mail = $_SESSION["uye_mail"];




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
        	?>



        	<table>
        		

        		<tr>

        			<td><b>İstek Gönderen</b></td>
        			<td><?php echo $mail; ?></td>
        		</tr>

        		<tr>

        			<td><b>İstek Alan</b></td>
        			<td><?php echo $adi; ?><?php echo $soyadi; ?></td>
        		</tr>

        		     <tr>

        			<td><b>Puan</b></td>
        			<td><?php echo $puan; echo $cafe; echo $durum; ?></td>
        		</tr>
        		        		<tr>

        			<td><b>Durum</b></td>
        			<td><?php echo $onay; ?></td>
        		</tr>


        	</table>





<?php
      

 }  ?>




