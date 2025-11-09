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
$s1=$_POST["sayi1"];
$s2=$_POST["sayi2"];
$islem=$_POST["islem"];
 
// Bu kısımda switch-case yapısı da kullanılabilirdi.
if($islem=="+")
   $sonuc=$s1+$s2;
elseif($islem=="-")
   $sonuc=$s1-$s2;
elseif($islem=="*")
   $sonuc=$s1*$s2;
else
   $sonuc=$s1/$s2;
 
echo "İşlemin Sonucu:<br>$s1$islem$s2=$sonuc";
?>
	



</body>
</html>
