<!DOCTYPE html>
<?php
include('baglan.php');
?>
<html>
<head>
<title>Veri Düzenleme</title>
</head>
<body>
<?php
if ( isset($_POST['submit']) ){
    $yazar = htmlspecialchars($_POST['yazarlar'], ENT_QUOTES, 'UTF-8');
    $dergi = htmlspecialchars($_POST['dergi'], ENT_QUOTES, 'UTF-8');
    $baslik = htmlspecialchars($_POST['baslik'], ENT_QUOTES, 'UTF-8');
    $cilt = htmlspecialchars($_POST['cilt'], ENT_QUOTES, 'UTF-8');
    $id = htmlspecialchars($_POST['kayit_id'], ENT_QUOTES, 'UTF-8');    
    //echo $id;    
  $sql = "Update yayinlar set 
            yazar = '$yazar', 
            dergi = '$dergi', 
            makale = '$baslik', 
            cilt = '$cilt' where id =$id";
   $sonuc = mysqli_query($conn,$sql);
   echo "<script language='Javascript'>window.location.href='index.php'</script>";    
}
else {
    $id = $_GET['islem_no'];
	
	// Kullanıcıdan gelen verileri direkt olarak kullanmak tehlikelidir.
	//$id = isset($_GET['islem_no']) ? (int) $_GET['islem_no'] : 0;
	//$id = htmlspecialchars($_GET['islem_no'], ENT_QUOTES, 'UTF-8');
	
    $sorgu = mysqli_query($conn,"select * from yayinlar where id =$id");
    $satir = mysqli_fetch_array($sorgu);    
   ?> 
    <center>
    <form name="yayin_duzenleme" method="POST" action="duzenle.php">
    <h1>Veri Düzenleme</h1>
    <table align='center'>
    <tr>
    <td>Yazarlar : </td>
    <td><input type="text" value="<?php echo  $satir['yazar'];   ?>" name="yazarlar"></td>
    </tr>
    <tr>
    <td>Dergi İsmi : </td>
    <td><input type="text" value="<?php echo  $satir['dergi'];   ?>" name="dergi"></td>
    </tr>
    <tr>
    <td>Başlık : </td>
    <td><input type="text" value="<?php echo  $satir['makale'];   ?>" name="baslik"></td>
    </tr>
    <tr>
    <td>Cilt-Sayı : </td>
    <td><input type="text" value="<?php echo  $satir['cilt'];   ?>" name="cilt"></td>
    </tr>
    <tr>
    <td align='right' colspan=2>
    <input type="hidden" value="<?php echo  $id;   ?>" name="kayit_id">
    <input type="submit" name="submit" value="Düzenle">      
    </td>
    </tr>
    </table>
    </form>
    </center>
  <?php  } ?>
</body>
</html>