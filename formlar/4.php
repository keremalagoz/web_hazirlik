<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

<form name="yukle" method="post" action="yukle.php" enctype="multipart/form-data">
      <table>
         <tr>
            <td align="right"><b>Dosyanın Kalıcı Adı:</b></td>
            <td><input type="text" name="dosyaadi"></td>
         </tr>
         <tr>
            <td align="right"><b>Dosya Seçiniz:</b></td>
            <td><input type="file" name="dosya"></td>
         </tr>
         <tr>
            <td align="right"><b>Dosya Türü:</b></td>
            <td>
               <select name="tur">
                  <option value="jpg">jpg</option>
                  <option value="gif">gif</option>
                  <option value="png">png</option>
                  <option value="pdf">pdf</option>
                  <option value="doc">doc</option>
                  <option value="xls">xls</option>
                  <option value="ppt">ppt</option>
                  <option value="rar">rar</option>
                  <option value="txt">txt</option>
               </select>
            </td>
         </tr>
         <tr>
            <td align="right" valign="top"><b>Kayıt Yeri:</b></td>
            <td>
               <input type="radio" name="kayit_yeri" value="resimler" checked>Resimler<br>
               <input type="radio" name="kayit_yeri" value="belgeler">Belgeler
            </td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="yukle" value="Yükle"></td>
         </tr>
      </table>
   </form>

<?php

/* 
Web sayfalarında formların daha düzgün görünmesi için genelde tablolar kullanılır.
Dosya yüklemek için kullanılabilecek bir form yapısı bu şekilde hazırlanabilir.
 */
	


?>

</body>
</html>
