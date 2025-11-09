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
// İstenen kullanıcı adını ve şifreyi sabit değişkenler olarak tanımlayalım.
define("username","matbil");
define("password","12345");
 
if($_POST["k_adi"]==username and $_POST["sifre"]==password)
   echo "Giriş izni verildi. Hoşgeldiniz.";
else{
   echo "Kullanıcı adını yada şifreyi yanlış girdiniz. Tekrar deneyiniz!<br>";
   echo "<a href='index.php'>Geri</a>";
}
?>

</body>
</html>
