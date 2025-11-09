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

echo "<b>Numarası</b>: ".@$_GET["no"]."<br>";
echo "<b>Adı</b>: ".@$_GET["ad"]."<br>";

/* 
Burada tıklanan linke göre sadece no yada ad gönderilmektedir. 
Buna göre gonder3.php sayfasında duruma göre sadece gelen bilgiyi ekrana yazdırmak için 
şu şekilde düzenlenebilir.

Burada if(@$_GET["no"]) ifadesi; 
GET metodu ile gelen no bilgisi varsa anlamına gelmektedir. 
Başındaki @ işareti ise uyarı mesajına engel olmaktadır. 
Dikkat ediniz hata değil, uyarı mesajına engel olur. 
Eğer GET ile no bilgisi gelmiyorsa, gelmeyen yani olmayan bir değişkeni if yapısı kontrol ederken uyarı verir. 
Bu uyarı mesajını gizlemek için @ işaretini kullanıyoruz.
 */

?>
	



</body>
</html>
