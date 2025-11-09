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
$uyeler=array(14=>"Ömer",22=>"Erkin",35=>"Zekiye",41=>"Vildan",85=>"Yalçın",114=>"Rabia");
echo "<table border='1'>";
echo "<tr>";
echo "<td>Numarası</td>";
echo "<td>Adı</td>";
echo "<td colspan='2'>İşlem</td>";
echo "</tr>";
foreach($uyeler as $indis=>$deger){
   echo "<tr>";
   echo "<td>$indis</td>";
   echo "<td>$deger</td>";
   echo "<td><a href='gonder5.php?no=$indis&islem=duzelt'>Düzelt</a></td>";
   echo "<td><a href='gonder5.php?no=$indis&islem=sil'>Sil</a></td>";
   echo "</tr>";
}
echo "</table>";

/* 
Dizideki kişileri tablo şeklinde ekrana yazdıralım. 
Tabloda sil ve düzelt şeklinde tanımlanan iki link ile bu kişilerin numaralarını ve işlem adını gonder5.php 
sayfasına gönderip ekrana yazdıralım.
 */
	
?>

</body>
</html>
