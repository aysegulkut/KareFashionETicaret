<?php
include("../Connections/baglan.php");
$id = $_GET["id"];
$hata=0;
 $sil=mysql_query("update siparis set durum_id='2' where id='$id'");
 if(!$sil){
 $hata++;
 }

if($hata == 0){
	echo "<script>alert('Sipariş Onaylandı.');</script>";
	header("refresh:1;url=bekleyensiparisler.php");
}
else{
	echo"<script>alert('Onaylama işlemi Gerçekleşemedi.!!');</script>";
	header("refresh:1;url=bekleyensiparisler.php");
}
?>