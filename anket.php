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
    <form enctype="multipart/form-data" action ="anket_yap.php" method="post">
       <table> 
	   
	   <tr>
               <td>Anket icerik</td><td><textarea type="text" name="anketicerik" required></textarea></td>
		</tr>
		<tr>
		<td>Anket geçerlilik</td>
		<td>
		<input name="gecerlilik" type="date" required/>
		</td>
		</tr>
		<tr>
		<td><label for ="secenekler" >Seçenekler (arasına "," KOYUNUZ)</label></td>
        <td><input type="text" name="secenekler" required/></td>
		</tr>
		<tr><td></td>
		<td><input type="submit" value="gönder"/></td> 
		</tr>
		</table>
    </form>
	
	<a href="anket_goster.php"> diğer anketlere bakmak için buraya tıklayınız</br><hr> </a>
    
    <?php
 
 
 
    ?>
</body>
</html>
