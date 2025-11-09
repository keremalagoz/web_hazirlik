<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

 
<?php
echo "<b>Yüklenen dosyanın adı:</b> ",$_FILES["dosya"]["name"],"<br>";
echo "<b>Yüklenen dosyanın geçici adı:</b> ",$_FILES["dosya"]["tmp_name"],"<br>";
echo "<b>Yüklenen dosyanın türü:</b> ",$_FILES["dosya"]["type"],"<br>";
echo "<b>Yüklenen dosyanın boyutu:</b> ",$_FILES["dosya"]["size"],"<br>";
echo "<b>Varsa yüklerken oluşan hata:</b> ",$_FILES["dosya"]["error"],"<br>";
?>


</body>
</html>
