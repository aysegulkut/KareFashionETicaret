<?php 
session_start();
include("Connections/baglan.php");
$musteriid=$_SESSION['musteriid'];
$sepetid=$_GET['id'];
$hata=0;
 $sil=mysql_query("DELETE FROM sepet where id='$sepetid' and musteri_id='$musteriid'");
 if(!$sil){
 $hata++;
 }

$sor = mysql_query("SELECT * FROM musteri where id='$musteriid'")or die(mysql_error());
	while($yaz=mysql_fetch_array($sor))
	{
		
if($hata == 0){
	echo "<script>alert('Silme İşlemi Başarıyla Gerçekleşti.');</script>";
	$link=$yaz['id'];
	header("refresh:1;url=sepetim.php?id=$link");
}
else{
	echo"<script>alert('Silme İşlemi Gerçekleşemedi.!!');</script>";
	header("refresh:1;url=sepetim.php?id=$link");
}
	}
?>