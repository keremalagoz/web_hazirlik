<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

<form name="yukleme" method="post" action="3yukle.php" enctype="multipart/form-data">
      Gif resmi seçiniz: <input type="file" name="dosya"><br>
      <input type="submit" name="yukle" value="Yükle">
   </form>

<?php

/* 
Aşağıdaki şartlar sağlanırsa dosyayı kendi adıyla upload dizinine yükleyelim.

-Hata oluşmazsa
-Dosya daha önce yüklenmemişse
-Dosya gif dosyası ise
 */
	


?>

</body>
</html>
