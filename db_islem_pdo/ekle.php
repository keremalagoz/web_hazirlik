<!DOCTYPE html>
<?php
include('baglan.php');
?>
<html>
<head>
<title>Yeni Veri Ekleme</title>
</head>

<body>

<?php

if ( isset($_POST['submit']) ){
    $yazar = htmlspecialchars($_POST['yazarlar'], ENT_QUOTES, 'UTF-8');
    $dergi = htmlspecialchars($_POST['dergi'], ENT_QUOTES, 'UTF-8');
    $baslik = htmlspecialchars($_POST['baslik'], ENT_QUOTES, 'UTF-8');
    $cilt = htmlspecialchars($_POST['cilt'], ENT_QUOTES, 'UTF-8');

    $sonuc = $conn->prepare("INSERT INTO yayinlar SET yazar = ?, dergi = ?, makale = ?, cilt = ?");
    $ekle = $sonuc->execute(array( $yazar, $dergi, $baslik,$cilt ));

    /*
    if ( $ekle ){
        $last_id = $conn->lastInsertId();
        echo "insert işlemi başarılı!";
    }
    */
    
    echo "<script language='Javascript'>window.location.href='index.php'</script>";
  
}
else {
   ?> 
   <center>

    <form name="yayin_ekleme" method="POST" action="ekle.php">

    <h1>Veri Ekleme</h1>
    <table align='center'>
    <tr>
    <td>Yazarlar : </td>
    <td><input type="text" name="yazarlar"></td>
    </tr>
    <tr>
    <td>Dergi İsmi : </td>
    <td><input type="text" name="dergi"></td>
    </tr>
    <tr>
    <td>Başlık : </td>
    <td><input type="text" name="baslik"></td>
    </tr>
    <tr>
    <td>Cilt-Sayı : </td>
    <td><input type="text" name="cilt"></td>
    </tr>
    <tr>
    <td align='right' colspan=2><input type="submit" name="submit" value="Ekle"></td>
    </tr>
    </table>
    </form>
    </center>

  <?php  
}
?>


</body>
</html>

	
	


