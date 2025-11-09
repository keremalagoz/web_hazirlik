<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

   <form name="yukleme" method="post" action="2yukle.php" enctype="multipart/form-data">
      Yüklenecek Dosyayı seçiniz: <input type="file" name="dosya"><br>
      <input type="submit" name="yukle" value="Yükle">
   </form>

<?php

/* 
Bu örnekte dosya, hiçbir özelliğine bakmaksızın upload dizinine kaydediliyor.
 */
	


?>

</body>
</html>
