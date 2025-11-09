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
$no=$_GET["no"];
if($_GET["islem"]=="duzelt")
   echo "$no nolu kayıt düzeltilecektir.";
elseif($_GET["islem"]=="sil")
   echo "$no nolu kayıt silinecektir!";
?>
	
</body>
</html>
