<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
    <style>
       
    </style>
</head>
	<body>
    
	
	<a href="anket.php"> anket oluşturmak için buraya tıklayınız</br><hr> </a>
        <a href="anket_goster.php"> anketleri görmek için buraya tıklayınız</br><hr> </a>
	<a href="anketlerim.php"> oyladığınız anketleri görmek için buraya tıklayınız</br><hr> </a>
          <a href="anket_sonuc.php">Sonuçlanan anketleri görmek için buraya tıklayınız</br><hr> </a>
	
	<h2> Anketler </h2>
    
    <?php
	  include 'baglan.php';
  include 'dbclass.php';
 
$kullanici_id= 2;
 
$anketler= mysqli_query($baglan, "select DISTINCT t1.*,anket_oy, datediff(gecerlilik_suresi,now()) as fark from anket t1, anket_oylama t2 where t2.kullanici_id=2 and t1.anket_id=t2.anket_id and gecerlilik_suresi > now() ORDER BY `t1`.`anket_id` ASC");






while( $satir = mysqli_fetch_assoc($anketler) ){
    $parcala= explode (",", $satir["secenekler"]);
    // bilgileri yazdiralim 
   echo $satir["anket_id"].'</br>';
   echo 'icerik: '.$satir["anket_icerik"].'</br>';
   echo 'oyunuz: '.$parcala[$satir["anket_oy"]].'</br>';
   echo $satir["fark"].' gün kaldı. <hr>';
   
  }
 
 
    ?>
</body>
</html>
