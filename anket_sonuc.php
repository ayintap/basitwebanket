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
        <a href="anket_goster.php">oylanmayan anketleri görmek için buraya tıklayınız</br><hr> </a>
	<a href="anketlerim.php"> oyladığınız anketleri görmek için buraya tıklayınız</br><hr> </a>
        
        <a href="anket_sonuc.php">Sonuçlanan anketleri görmek için buraya tıklayınız</br><hr> </a>
	
	<h2> Anketler </h2>
    
    <?php
	  include 'baglan.php';
  include 'dbclass.php';
 
$kullanici_id= 2;
 
$anketler= mysqli_query($baglan, "select * from anket where  gecerlilik_suresi < now()"); // anket geçerlilik tarihi bitenler çekilmiş

function  anket_oy($baglan,$anket_id) {
    
    return mysqli_query($baglan, "select anket_oy, count(*) from anket_oylama where anket_id='$anket_id' GROUP by 1");
    
}




  

while( $satir = mysqli_fetch_assoc($anketler) ){
     $toplam = array();
    echo 'icerik : '.$satir["anket_icerik"].'</br>';

  $parcala= explode (",", $satir["secenekler"]);
    $oy = anket_oy($baglan, $satir["anket_id"]);
    while( $atir = mysqli_fetch_assoc($oy) ){
        
       echo  $parcala[$atir["anket_oy"]].' seçeneğine verilen oy '.$atir["count(*)"].' kadardır </br>'; 
       array_push($toplam, $atir["count(*)"]);
    }
   
    
    echo 'toplam kullanılan oy :'.array_sum($toplam).'<hr>';
    

   
  }




 
 
    ?>
</body>
</html>
