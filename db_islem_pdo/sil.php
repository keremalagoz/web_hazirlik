<!DOCTYPE html>
<?php
include('baglan.php');
$i = $_GET['islem_no'];
//echo $i;


$sorgu = $conn->prepare("delete from yayinlar where id= :id");
$sil = $sorgu->execute(array('id' => $i ));


echo "<script language='Javascript'>window.location.href='index.php'</script>";


?>
