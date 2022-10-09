<?php
session_start();
include("Connections/baglan.php");
$id = $_GET["id"];
$hata=0;
 $sil=mysql_query("DELETE FROM siparis where id='$id'");
 if(!$sil){
 $hata++;
 }

if($hata == 0){
	echo "<script>alert('Silme İşlemi Başarıyla Gerçekleşti.');</script>";
	$link=$_SESSION['musteriid'];
	header("refresh:1;url=siparislerim.php?id=$link");
}
else{
	echo"<script>alert('Silme İşlemi Gerçekleşemedi.!!');</script>";
	header("refresh:1;url=siparislerim.php?id=$link");
}
?>