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
 
$anketler= mysqli_query($baglan, "select DISTINCT *, datediff(gecerlilik_suresi,now()) as fark from anket where anket_id not in ( select distinct anket_id from anket_oylama ) and gecerlilik_suresi > now()");




 
 
while( $satir = mysqli_fetch_assoc($anketler) ){
    // bilgileri yazdiralim
   echo '<form type="get" action="anket_oyla.php">'.$satir["anket_id"].'</br>';
   echo '</br><input type="text" name="anketid" value="'.$satir["anket_id"].'"/></br>';
   echo 'icerik : '.$satir["anket_icerik"].'</br>';
  
  $parcala= explode (",", $satir["secenekler"]);
  for ($i=0; $i<count($parcala); $i++){
            if (trim($parcala[$i])!=""){
            echo '</br><input type="radio" name="anketoy" value="'.$i.'"/>'.$parcala[$i].'</br>';  }
  }
  echo '<input type ="submit" value= "Oyla"/>';
  echo '</form>';
   echo $satir["fark"].' gün kaldı. <hr>';
   
  }
 
 
 
    ?>
</body>
</html>
