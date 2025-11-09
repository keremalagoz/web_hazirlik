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

$resimler=array(1=>"gok.jpg","mavi.jpg","park.jpg","sari.jpg","yesil.jpg");
foreach($resimler as $indis=>$deger)
   echo "<a href='6.php?resim_no=$indis'>$indis</a> ";
 
echo "<br>";
if($_GET){ // GET olayı varsa anlamındadır.
   echo "Merhaba <br>";
   echo "<img src='img/".$resimler[$_GET["resim_no"]]."'>"; // GET olayı varsa ilgili resmi gösterir
   echo "<br><b>".$resimler[$_GET["resim_no"]]."</b>"; // resmin adını yazar
}
else  {
   echo "<img src='img/".$resimler[1]."'>"; // GET olayı yoksa ilk resmi gösterir
   echo "<br><b>".$resimler[1]."</b>"; // ilk resmin adını yazar
   }
   
   /* 
Bu örneğimizde GET metodu ile sayfanın kendisine bilgi göndereceğiz. 
Bunun için hedef olarak bulunduğunuz sayfanın adını yazacağız.

Örneğimizde ekranda bulunan numaralardan birine tıklandığında buna karşılık gelen resmi ekranda göstereceğiz. 
Bu resimlerin adları bir dizide saklıdır.
Buradaki if($_GET) ifdadesi GET olayı varsa anlamına gelmektedir.
 */
?>

</body>
</html>
