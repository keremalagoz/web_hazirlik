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

$s1=rand(1,100);
$s2=rand(1,100);
echo "<b>Bulunan sayılar:</b><br>";
echo "Sayı 1=$s1<br>Sayı 2=$s2<br>";
echo "<a href='gonder2.php?sayi1=$s1&sayi2=$s2'>Bu linke tıklayarak sayıları gönderebilirsiniz</a>";


/* 
Rastgele üretilen iki sayıyı gonder2.php sayfasına bir link ile (GET metodu ile) gönderip ekrana yazdıralım.
 */
	


?>

</body>
</html>
