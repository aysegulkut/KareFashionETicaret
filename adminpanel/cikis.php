<?php
session_start();
unset($_SESSION['kullanici_adi']);
unset($_SESSION['sifre']);
unset($_SESSION['kullanici_id']);

session_destroy();

echo "<script>alert('Cikis Yaptiniz... Giriş Sayfasına yonlendiriliyorsunuz...');</script>";
header("Refresh: 0; url=buyuradminForm.php");
ob_end_flush();
?>