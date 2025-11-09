<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

 <form name="form1" method="post" action="gonder6.php">
      Metni Giriniz: <input type="text" name="metin"><br>
 
      <fieldset>
      <legend>Yazı stilini seçiniz:</legend>
         Yazı Tipi:
         <select name="tip">
            <option value="Times New Roman">Times New Roman</option>
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Tahoma">Tahoma</option>
         </select><br>
         Yazı Boyutu:
         <select name="boyut">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" checked>3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
         </select>
      </fieldset>
 
      <fieldset>
      <legend>Yazı rengini seçiniz:</legend>
         <input type="radio" name="renk" value="red">Kırmızı<br>
         <input type="radio" name="renk" value="blue" checked>Mavi<br>
         <input type="radio" name="renk" value="green">Yeşil<br>
         <input type="radio" name="renk" value="brown">Kahverengi
      </fieldset>
 
      <fieldset>
      <legend>Yazı biçiminiz seçiniz:</legend>
         <input type="checkbox" name="kalin" value="b">Kalın<br>
         <input type="checkbox" name="egik" value="i">Eğik<br>
         <input type="checkbox" name="alticizili" value="u">Altı çizili
      </fieldset>
 
      <input type="submit" name="yaz" value="Yaz">
   </form>

<?php

/* 
Girilen metni seçilen biçimlerde ekranda gösteren gonder6.php sayfasını hazırlayalım.
 */
	


?>

</body>
</html>
