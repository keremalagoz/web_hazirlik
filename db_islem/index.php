<!DOCTYPE html>
<?php
include('baglan.php');
?>
<html>
<head>
<title>Veri Tabanı Bağlantısı</title>
</head>

<body>

<?php
$sonuc = mysqli_query($conn,"select * from yayinlar order by dergi desc");
$say = mysqli_num_rows($sonuc);
?>

<center>
<h1>Toplam <?php echo $say ?> Adet Kayıt Listeleniyor</h1>
<table border=0 width=1200>
	<tr>
	<th width=15%>Yazarlar</th>
	<th width=25%>Dergi</th>
	<th width=25%>Makale</th>
	<th width=15%>Cilt-Sayı</th>
	<th align=center width=10%>Düzenle</th>
	<th align=center width=10%>Sil</th>
	</tr>
     <?php
if ( $say > 0 ) {
	
while ( $satir = mysqli_fetch_array($sonuc) ) {
	
/*	
mysqli_fetch_array() ikinci bir parametre alabilir: Bu parametre ile hangi türde dizi istediğinizi belirtilir

MYSQLI_ASSOC - Sadece sütun adlarıyla erişim (önerilen ve temiz yöntem)
MYSQLI_NUM	 - Sadece sayısal indekslerle erişim
MYSQLI_BOTH	 - Her ikisi birden (varsayılan)
*/
	
echo "<tr>";
echo "<td>".$satir['yazar']."</td>";
echo "<td>".$satir['dergi']."</td>";
echo "<td>".$satir['makale']."</td>";
echo "<td>".$satir['cilt']."</td>";
echo "<td align=center><a href='duzenle.php?islem_no=".$satir['id']."'><img src='img/duzenle.jpg'></a></td>";
echo "<td align=center><a href='sil.php?islem_no=".$satir['id']."'><img src='img/sil.jpg'></a></td>";
echo "</tr>";

}
}

?>

</table>
<br>
<a href="ekle.php"><img src='img/ekle.png'></a>
</center>
</body>
</html>

	
	


