<html>
<head>
<title>Formlar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta name="description" content="Php ve Form">
<meta name="keywords" content="HTML,PHP, Form">
<meta name="Author" content="Alper Odabaş">
</head>
<body>

 <form name="arama" method="post" action="ara.php">
      <table>
         <tr>
            <td colspan="4"><b>Program Adı:</b> <input type="text" name="ad"></td>
         </tr>
         <tr>
            <td>
               <b>Kategori:</b><br>
               <select name="kategori" size="10">
                  <option value="guvenlik">Güvenlik</option>
                  <option value="grafik">Grafik</option>
                  <option value="masaustu">Masaüstü</option>
                  <option value="ses-video">Ses-Video</option>
                  <option value="internet">İnternet</option>
               </select>
            </td>
            <td>
               <b>Lisans:</b><br>
               <select name="lisans" size="10">
                  <option value="free">Freeware</option>
                  <option value="share">Shareware</option>
                  <option value="ucretli">Ücretli</option>
                  <option value="gnu">GNU/GPL</option>
               </select>
            </td>
            <td>
               <b>Dil:</b><br>
               <select name="dil" size="10">
                  <option value="turkce">Türkçe</option>
                  <option value="ingilizce">İngilizce</option>
                  <option value="almanca">Almanca</option>
                  <option value="fransizca">Fransızca</option>
                  <option value="diger">Diğer</option>
               </select>
            </td>
            <td>
               <button>
                  <img src="img/arama.png"><br>
                  <b>Ara</b>
               </button>
            </td>
         </tr>
      </table>
   </form>

<?php

/* 
Basit bir program arama formu
 */
	
?>

</body>
</html>
