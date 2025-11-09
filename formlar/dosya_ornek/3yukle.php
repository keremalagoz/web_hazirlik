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
$kalici_yol_ad="upload/".$_FILES["dosya"]["name"]; // dosya kendi adıyla kaydedilecek
 
if ($_FILES["dosya"]["error"]) // hata oluştu ise
   echo "Hata : ",$_FILES["dosya"]["error"];
else{
      if (file_exists("upload/".$_FILES["dosya"]["name"])) // yüklenen dosya upload dizininde varsa
         echo "Seçtiğiniz dosya daha önce yüklenmiştir.";
      else{
         if ($_FILES["dosya"]["type"]=="image/gif"){
            if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
               echo "Dosya başarı ile yüklendi.";
            else
               echo "Dosya yükleme başarısız!";
         }
         else
            echo "Lütfen gif resmi seçiniz.";
      }
}
?>


</body>
</html>
