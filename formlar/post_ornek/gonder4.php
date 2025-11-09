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
$sayi=$_POST["sayi"];
$islem=$_POST["islem"];
 
if($islem=="kare"){
   $sonuc=pow($sayi,2);
   echo "$sayi<sup>2</sup>=$sonuc";
}
elseif($islem=="kup"){
   $sonuc=pow($sayi,3);
   echo "$sayi<sup>3</sup>=$sonuc";
}
elseif($islem=="karekok"){
   $sonuc=sqrt($sayi);
   echo "karekök($sayi)=$sonuc";
}
else{ // faktoriyel hesaplanıyor
   $sonuc=1;
   for($i=1;$i<=$sayi;$i++)
      $sonuc = $sonuc*$i;
   echo "$sayi!=$sonuc";
}
?>



</body>
</html>
