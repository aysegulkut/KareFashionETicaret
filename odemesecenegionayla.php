<?php 
session_start();
include("Connections/baglan.php");

$id=$_SESSION["musteriid"];
$ad=$_SESSION['musteriad'];
$soyad=$_SESSION['musterisoyad'];
$tel=$_SESSION['tel'];
$adres=$_SESSION['adres'];
//$mesafelisozlesme=$_POST['mesafelisozlesme'];
//echo $mesafelisozlesme;
$tarihsaat=date('Y.m.d H:i:s');
$sepettoplam=$_SESSION['toplam'];
if(empty($_GET['odemetipi'])|| $sepettoplam==0){
   echo "<script>Lütfen ödeme yöntemini seçiniz veya sipariş yok.</script>";
   header("odemesecenegi.php?id=$id");
   }
  elseif(isset($_GET['odemetipi'])){
   $odemetipi = $_GET['odemetipi'];

$sorgu=mysql_query("INSERT INTO siparis (musteri_id, tarih_saat,odemetipi_id,tutar,durum_id) VALUES ('$id','$tarihsaat','$odemetipi','$sepettoplam','1')")or die(mysql_error());
$silsorgu=mysql_query("DELETE FROM sepet where musteri_id='$id'")or die(mysql_error());

	echo "<script>alert('Siparişiniz alındı. Siparişinizi siparişlerim bölümünden takip edebilirsiniz.');</script>";
    header("refresh:1; url=siparislerim.php?id=$id");	
}/*elseif(!isset($mesafelisozlesme)){
	 echo "<script>Mesafeli Satış Sözleşmesini onaylayınız.</script>";
   header("odemesecenegi.php");
	}*/
?>