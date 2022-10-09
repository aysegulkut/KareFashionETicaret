<?php
session_start();
include("Connections/baglan.php");
$musteriid = $_GET["id"];
$sepettoplam=$_SESSION['toplam'];
//unset($_SESSION['toplam']);
$tarihsaat=date('d.m.Y H:i:s');
$sorgu = mysql_query("INSERT INTO siparis (musteri_id, tarih_saat,odemetipi_id,tutar,durum_id) VALUES ('$musteriid','$tarihsaat','0','$sepettoplam','0')")or die(mysql_error());

echo "<script>alert('Sepetinize eklendi.');</script>";
header("refresh:1;url=adresekle.php?id=$musteriid");
?>