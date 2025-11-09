<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

<form name="yorum" method="post" action="yorum_kaydet.php">
      <table>
         <tr>
            <td align="right">Ad Soyad:</td>
            <td><input type="text" name="adsoyad"></td>
         </tr>
         <tr>
            <td align="right">Başlık:</td><td><input type="text" name="baslik"></td>
         </tr>
         <tr>
            <td align="right">Yorum:</td>
            <td><textarea name="yorum"></textarea></td>
         </tr>
         <tr>
            <td align="right">e-mail:</td>
            <td><input type="text" name="email"></td>
         </tr>
         <tr>
            <td align="right">Web Site:</td>
            <td><input type="text" name="website" value="http://www."></td>
         </tr>
         <tr>
            <td align="right"><input type="submit" name="gonder" value="Gönder"></td>
            <td><input type="reset" name="temizle" value="Temizle"></td>
         </tr>
      </table>
   </form>

<?php

/* 
Web sayfalarında formların daha düzgün görünmesi için genelde tablolar kullanılır.
Yorum almak için kullanılabilecek bir form yapısı bu şekilde hazırlanabilir.
 */
	


?>

</body>
</html>
