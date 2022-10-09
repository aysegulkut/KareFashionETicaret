<?php
include("../Connections/baglan.php");
$id = $_GET["id"];
$hata=0;

$f1=mysql_query("select * from urun where urun_id='$id'")or die(mysql_error());
	while ($f11 = mysql_fetch_array($f1)) {
		$filePath1=$f11["urun_foto1"];
		$filePath2=$f11["urun_foto2"];
		$filePath3=$f11["urun_foto3"];
	}
		if(file_exists($filePath1)){
			unlink($filePath1);
			
				}
		
		if(file_exists($filePath2)){
			unlink($filePath2);
			
				}
		
		if(file_exists($filePath3)){
			unlink($filePath3);
			
				}
		$sil=mysql_query("DELETE FROM urun where urun_id='$id'");
 if(!$sil){
 $hata++;
 }

if($hata == 0){
	echo "<script>alert('Silme İşlemi Başarıyla Gerçekleşti.');</script>";
	header("refresh:1;url=urungoruntule.php");
}
else{
	echo"<script>alert('Silme İşlemi Gerçekleşemedi.!!');</script>";
	header("refresh:1;url=urungoruntule.php");
}
?>