<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

<form name="form1" method="post" action="gonder3.php">
      Birinci Sayı: <input type="text" name="sayi1"><br>
      İkinci Sayı: <input type="text" name="sayi2"><br>
      İşleminizi seçiniz:
      <select name="islem">
         <option value="+">Topla</option>
         <option value="-">Çıkar</option>
         <option value="*">Çarp</option>
         <option value="/">Böl</option>
      </select>
      <input type="submit" name="hesapla" value="Hesapla">
   </form>

<?php

/* 
Kullanıcının girdiği iki sayıyı yine kullanıcının açılır listeden seçtiği işleme göre 
gonder3.php sayfasında işleme alıp sonucu ekranda gösterelim.
 */
	


?>

</body>
</html>
