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
    <a href="anket_goster.php"> anketleri görmek için buraya tıklayınız</br> </a>
	<a href="anketlerim.php"> oyladığınız anketleri görmek için buraya tıklayınız</br><hr> </a>   
    <a href="anket_sonuc.php">Sonuçlanan anketleri görmek için buraya tıklayınız</br><hr> </a>
	
	<h2> Anketler </h2>
    
    <?php
	  include 'baglan.php';
         
 
$kullanici_id= 2;

   if (isset($_GET)) {
	   print_r($_GET);
	  $anket_id =$_GET["anketid"];
	  $anket_oy =$_GET["anketoy"];
	  $olusturan_id = '2';// daha sonra session dan çekilecek 
	  
	  
	  $yazdir= mysqli_query($baglan, "insert into anket_oylama (anket_id, anket_oy ,kullanici_id) values ('$anket_id', '$anket_oy','$kullanici_id')");
	
	
	if ($yazdir){
		echo 'kayıt başarılı';
	}else {
		echo 'denemekten vazgeçme iyisin !';
	}
  
  }else {
	  
	  echo 'bu sayfaya bu şekilde giremezsin değil mi ???? ';
	  
  }
  
 
    ?>
</body>
</html>
