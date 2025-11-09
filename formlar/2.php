<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

   <form name="kisisel" method="post" action="kisisel_kaydet.php">
      <table>
         <tr>
            <td align="right">Ad:</td>
            <td><input type="text" name="adi"></td>
         </tr>
         <tr>
            <td align="right">Soyad:</td>
            <td><input type="text" name="soyadi"></td>
         </tr>
         <tr>
            <td align="right">Cinsiyet:</td>
            <td>
               Bay<input type="radio" name="cinsiyet" value="bay" checked>
               Bayan <input type="radio" name="cinsiyet" value="bayan">
            </td>
         </tr>
         <tr>
            <td align="right">Eğitim Durumu:</td>
            <td>
               <select name="egitim">
                  <option value="ilkogretim">İlköğretim</option>
                  <option value="lise" selected>Lise</option>
                  <option value="yuksekokul">Yüksek Okul</option>
                  <option value="universite">Üniversite</option>
                  <option value="master">Master</option>
                  <option value="doktora">Doktora</option>
               </select>
            </td>
         </tr>
         <tr>
            <td align="right"><input type="submit" name="gonder" value="Gönder"></td>
            <td><input type="reset" name="temizle" value="Temizle"></td>
         </tr>
      </table>
   </form>


<?php

/* 
Web sayfalarında formların daha düzgün görünmesi için genelde tablolar kullanılır.
Kişisel bilgilerin kaydı için kullanılabilecek bir form yapısı bu şekilde hazırlanabilir.
 */
	


?>

</body>
</html>
