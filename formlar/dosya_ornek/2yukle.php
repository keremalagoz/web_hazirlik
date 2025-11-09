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
$gecici_ad=$_FILES["dosya"]["tmp_name"];
$kalici_yol_ad="upload/".$_FILES["dosya"]["name"]; // dosya kendi adıyla upload dizinine kaydedilecek
 
if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
   echo "Dosya başarı ile yüklendi.";
else
   echo "Yükleme başarısız!";
?>


</body>
</html>
