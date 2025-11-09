<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

 <form name="form1" method="post" action="gonder4.php">
      Sayınızı Giriniz: <input type="text" name="sayi"><br>
      İşleminizi seçiniz:<br>
      <input type="radio" name="islem" value="kare" checked>Karesi<br>
      <input type="radio" name="islem" value="kup">Küpü<br>
      <input type="radio" name="islem" value="karekok">Karekökü<br>
      <input type="radio" name="islem" value="faktoriyel">Faktoriyeli<br>
      <input type="submit" name="Hesapla" value="Hesapla">
   </form>

<?php

/* 
Girilen sayının karesini, küpünü, karekökünü yada faktoriyelini gonder4.php sayfasında bulalım.
 */
	


?>

</body>
</html>
