<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

  <form name="form1" method="get" action="gonder1.php">
      Adı: <input type="text" name="adi"><br>
      Soyadı: <input type="text" name="soyadi"><br>
      <input type="submit" name="gonder" value="Gönder">
   </form>

<?php

/* 
GET metodu ile gönderilen ad ve soyad bilgilerini alıp ekrana yazdıralım.
İlk sayfamız olan 1.php sayfasında formlarımız var. 
Bu formlara girilen bilgilerin gonder1.php sayfasına gönderileceği 
action="gonder1.php" ile belirtilmiştir. 
method="get" ifadesiyle bilgilerin GET metodu ile gönderileceği belirtilmiştir. 
Unutmayınız form yapılarında çoğu zaman POST metodu kullanılır. 
GET metodu pek kullanılmaz. Burada sadece GET metodu ile bilgi göndermeye ve almaya örnek vermekteyiz.

İkinci sayfamız olan gonder1.php sayfasında formlardan gelen bilgiler alınıyor. 
Daha sonra sayfaya yazdırılması için echo fonksiyonuna veriliyor. 
Bu bilgileri değişkenlere atayarak da işlem yapabilirsiniz.

Not: index.php ile gonder1.php sayfalarının aynı dizinde olduğu kabul edilerek action kısmında 
gonder1.php sayfasının yolu belirtilmemiştir. Aksi halde dosyanın tam yolu yada göreceli yolu yazılmalıdır.
 */
	


?>

</body>
</html>
