<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<style type="text/css">
   <!--
 
   .main{
      background-color:#EDE;
      border:#F6F thin solid;
      color:#000;
      width:600px
   }
 
   .adsoyad {
      width:493px;
      background-color:#C39;
      border:#600 thin solid;
      font-weight: bold;
      color:#FFF;
      line-height:30px;
      padding-left:5px;
   }
 
   .div1{
      width:500px;
   }
 
   .baslik{
      float:left;
      width:340px;
      background-color:#F9C;
      border:#C09 thin solid;
      line-height:30px;
      color:#FFF;
      padding-left:5px;
   }
 
   .tarih{
      float:right;
      width:146px;
      background-color:#F9C;
      border:#C09 thin solid;
      line-height:30px;
      color:#FFF;
      padding-left:5px;
   }
 
   .yorum{
      clear:both;
      padding: 5px;
   }
 
   -->
   </style>
</head>
<body>

 <?php
if(!$_POST){// POST olayı yoksa yani sayfa ilk kez açılıyorsa

 ?>
 <form name="form1" method="post" action="8.php">
      <table border="0">
         <tr>
            <td align="right" valign="top">Adınız Soyadınız:</td>
            <td><input type="text" name="adsoyad"></td>
         </tr>
         <tr>
            <td align="right" valign="top">Başlık:</td>
            <td><input type="text" name="baslik"></td>
         </tr>
         <tr>
            <td align="right" valign="top">Tarih:</td>
            <td><input type="text" name="tarih" value="<?php echo date("d.m.Y G:i");?>" readonly></td>
         </tr>
         <tr>
            <td align="right" valign="top">Yorum:</td>
            <td><textarea name="yorum" rows="8" cols="30"></textarea></td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="gonder" value="Gönder"></td>
         </tr>
      </table>
   </form>
 
<?php

}
else { // POST olayı varsa.


echo "<div class=\"main\">";
echo "<div class=\"adsoyad\">".$_POST["adsoyad"]."</div>";
echo "<div class=\"div1\">";
echo "<div class=\"baslik\">".$_POST["baslik"]."</div>";
echo "<div class=\"tarih\">".$_POST["tarih"]."</div>";
echo "</div>";
echo "<div class=\"yorum\">".$_POST["yorum"]."</div>";
echo "</div>";

}



/* 
Kullanıcıdan yorum alan ve ekrana yazan php sayfası
 */
	


?>

</body>
</html>
