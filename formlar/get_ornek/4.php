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


$liste=array(74=>"Onur",64=>"Samet",85=>"Can",16=>"Raşit",80=>"Mert",14=>"Aziz");
foreach($liste as $indis=>$deger)
   echo "$indis <a href='gonder4.php?no=$indis'>$deger</a><br>";

/* 
Tablodaki numaralara ve isimlere tıklandığında bu bilgileri gonder3.php sayfasına gönderip ekrana yazdıralım.
 */
	


?>

</body>
</html>
