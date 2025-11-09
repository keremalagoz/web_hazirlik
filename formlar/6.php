<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

<form name="yazi" method="post" action="yazi_kayit.php">
      Yazı Başlığı: <input type="text" name="baslik"><br>
      Yazı:<br>
      <textarea name="yazi" rows="10" cols="50"></textarea><br>
      <input type="hidden" name="islem" value="yenikayit">
      <input type="submit" name="kaydet" value="Kaydet">
   </form>

<?php

/* 
Web sayfalarında bazen aynı formlar hem yeni kayıt hem de kayıt güncelleme amaçlı kullanılmaktadır. 
Hangi amaçla kullanıldığı gizli form ile belirtilebilir.
Yukarıdaki formda gönder denildiğinde bilgilerin gönderildiği yazi_kayit.php sayfasında 
islem isimli gizli formun değerine göre işlem yapılır.
 */
	


?>

</body>
</html>
