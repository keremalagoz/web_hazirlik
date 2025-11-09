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
if(!$_POST){// POST olayı yoksa yani sayfa ilk kez açılıyorsa
   $sayi=rand(1,100); // bulunması gereken sayı rastgele üretiliyor
   $mesaj="Bir sayı tuttuk bilin bakalım kaç!";
   echo  $sayi;
}
else{ // POST olayı varsa yani sayı tamin edildiyse
   $tahmin=$_POST["tahmin"];
   $sayi=$_POST["sayi"];
   if($tahmin>$sayi)
      $mesaj="Daha küçük bir sayı giriniz.";	  
   elseif($tahmin<$sayi)
      $mesaj="Daha BÜYÜK bir sayı giriniz.";
   else{
      $mesaj="Tebrikler bildiniz!";
      $mesaj.="<br><a href='7.php'>Tekrar denemek için tıklayınız.</a>";
   }
}
?>
 
   <form name="form1" method="post" action="7.php">
      Tahmin: <input type="text" name="tahmin"><br>
      <input type="hidden" name="sayi" value="<?php echo $sayi;?>">
      <input type="submit" name="tahminet" value="Tahmin Et">
   </form>
 
<?php
echo $mesaj;

/* 
Gizli form elemanı kullanarak sayı tahmin sayfası hazırlayalım. 
Girilen sayıyı aynı sayfaya POST edelim.

Bu örnekte tahmin edilmesi gereken sayı POST olayı olmadığı zaman yani sayfa ilk kez açıldığında üretiliyor. 
Daha sonra bu sayı gizli form elemanı ile her POST olayında gönderiliyor. 
Aksi halde bilinmesi gereken sayı POST olayından sonra kaybolur.

Ayrıca burada gizli formun value kısmına bilinmesi gereken sayıyı PHP kod bloğu açarak echo ile yazdırıyoruz. 
Formun altında da kullanıcıyı yönlendirici mesajı yine PHP kod bloğunu açıp echo ile yazdırıyoruz.
 */
	


?>

</body>
</html>
