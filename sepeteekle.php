<?php
session_start();
include("Connections/baglan.php");
$id = $_GET["id"];
$musteri_id=$_SESSION['musteriid'];
$beden=$_POST['beden'];
$adet=1;
$sorgu = mysql_query("INSERT INTO sepet (musteri_id, urun_id,adet,beden_id) VALUES ('$musteri_id','$id','$adet','$beden')")or die(mysql_error());

echo "<script>alert('Sepetinize eklendi.');</script>";
header("refresh:1;url=urunler.php");
?>