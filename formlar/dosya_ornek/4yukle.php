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
$kalici_yol_ad="upload/".$_POST["kalici_ad"].".pdf";
 
if ($_FILES["dosya"]["error"]) // hata oluştu ise
   echo "Hata : ",$_FILES["dosya"]["error"];
else{
   if (file_exists($kalici_yol_ad)) // yüklenen dosya upload dizininde varsa
      echo "Yazdığınız ad ile bir dosya zaten kayıtlıdır.";
   else{
      if ($_FILES["dosya"]["size"]>500*1024)
         echo "500KB'dan küçük bir dosya seçiniz.";
      else{
         if ($_FILES["dosya"]["type"]=="application/pdf"){
            if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
               echo "Dosya başarı ile yüklendi.";
            else
               echo "Dosya yükleme başarısız.";
         }
         else
            echo "Lütfen PDF dosyası seçiniz.";
      }
   }
}
?>


</body>
</html>
