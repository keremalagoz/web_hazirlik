<?php
include('baglan.php');
$i = $_GET['islem_no'];
//echo $i;
$sorgu = mysqli_query($conn,"delete from yayinlar where id=$i");
echo "<script language='Javascript'>window.location.href='index.php'</script>";
?>
