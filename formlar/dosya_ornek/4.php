<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

<form name="yukleme" method="post" action="4yukle.php" enctype="multipart/form-data">
      <table border="0">
         <tr>
            <td>Dosyanın Kalıcı Adı:</td>
            <td><input type="text" name="kalici_ad"></td>
         </tr>
         <tr>
            <td>PDF Dosyası Seçiniz:</td>
            <td><input type="file" name="dosya"></td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="yukle" value="Yükle"></td>
         </tr>
      </table>
   </form>

<?php

/* 
Aşağıdaki şartlara göre kullanıcının seçtiği dosyayı kullanıcının yazdığı ad ile 
upload dizinine kaydeden php sayfalarını hazırlayalım.

-Hata oluşmazsa
-Dosya daha önce yüklenmemiş ise
-Dosya pdf dosyası ise
-Dosya boyutu 500 KB'dan küçük ise
 */
	


?>

</body>
</html>
