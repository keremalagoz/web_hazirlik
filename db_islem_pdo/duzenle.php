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

		$sorgu = $conn->prepare("UPDATE yayinlar 
								 SET yazar = :yazar, dergi = :dergi, makale = :makale, cilt = :cilt 
								 WHERE id = :id");

		$duzenle = $sorgu->execute(array(
			"yazar"  => $yazar,
			"dergi"  => $dergi,
			"makale" => $baslik,
			"cilt"   => $cilt,
			"id"     => $id
		));

  /*
   if ( $duzenle ){
        print "güncelleme başarılı!";
   }
   */


  echo "<script language='Javascript'>window.location.href='index.php'</script>";
    
}
else {
    $id = $_GET['islem_no'];
    $sorgu = $conn->prepare("SELECT * FROM yayinlar WHERE id = :id");
	$sorgu->execute(['id' => $id]);
	$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
    
	/*
	PDO::FETCH_ASSOC — Anahtar olarak sütun adlarını kullanır. ( $satir['sutunadi'] )
	PDO::FETCH_NUM   — Sadece sayısal indeksli dizi döner ($satir[0], $satir[1]).
	PDO::FETCH_BOTH  — Hem isimle hem indexle erişim sağlar (assoc + num). (Genelde gereksiz yer kaplar.)
	PDO::FETCH_OBJ   — Satırı obje olarak döner: $satir->sutunadi
	fetch(PDO::FETCH_ASSOC) yerine fetch() kullanılabilir varsayılan davranış bağlantı esnasında belirtilebilir	
	*/
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




  <?php  
}
?>


</body>
</html>

	
	


