<?php
/* Bağlantı Kontrolu */

try {
	$conn = new PDO("mysql:host=localhost;dbname=xhoca;charset=utf8", "root", "");
	// Varsayılan fetch modunu sadece sütun adlarına göre ayarlayalım
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch ( PDOException $e ){
	print $e->getMessage();
}

/* Olası Türkçe karakter sorunları için */
// Karakter setini ayarlamak için aşağıdaki komutta kullanılabilir.
$conn->query("SET CHARACTER SET utf8");

/* Bağlantıyı Sonlandırmak için */
//$conn = null;

?>

