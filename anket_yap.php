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
        img {
            width: 150px;
            height: 150px;
        }
    </style>
</head>
	<body>
   
	
	<a href="anket_goster.php"> diğer anketlere bakmak için buraya tıklayınız </a>
    
    <?php
  include 'baglan.php';
         

  if (isset($_POST)) {
      
      if (trim($_POST["anketicerik"])=="" and trim($secenekler =$_POST["secenekler"])=="" ){
          
          echo 'anket içerik ve secenekleri boş bırakmayınız';
          echo '<meta http-equiv="refresh" content="3;url=anket.php">';
          
      } else {
	  
	  $anket_icerik =$_POST["anketicerik"];
	  $secenekler =$_POST["secenekler"];
	  $olusturan_id = '2';// daha sonra session dan çekilecek 
	  $anket_gecerlilik =$_POST["gecerlilik"];
	  
	  
	  $yazdir= mysqli_query($baglan, "insert into anket (anket_icerik, secenekler ,olusturan_id, gecerlilik_suresi) values ('$anket_icerik', '$secenekler','$olusturan_id', '$anket_gecerlilik')");
	
	
	if ($yazdir){
		echo 'kayıt başarılı';
	}else {
		echo 'denemekten vazgeçme iyisin !';
	}
      }
  
  }else {
	  
	  echo 'bu sayfaya bu şekilde giremezsin değil mi ???? ';
	  
  }
  
 
 
 
    ?>
</body>
</html>
