<?php
include("Connections/baglan.php");
session_start();
$mail = $_POST['mail'];
$sifre =md5( $_POST['sifre']);
$musterilistele=mysql_query("select * from musteri where mail='$mail' and sifre='$sifre' ")or die(mysql_error());
if(mysql_num_rows($musterilistele)>0){

	while($musterilistele2 = mysql_fetch_array($musterilistele))
	{
		$_SESSION['mail']= $musterilistele2['mail'];
		$_SESSION['sifre']= $musterilistele2['sifre'];
		$_SESSION['musteriid']=$musterilistele2['id'];
		$_SESSION['musteriad']=$musterilistele2['ad'];
		$_SESSION['musterisoyad']=$musterilistele2['soyad'];
		$_SESSION['adres']=$musterilistele2['adres'];
		$_SESSION['tel']=$musterilistele2['tel'];	
		$link=$_SESSION['musteriid'];
		header("refresh:1; url=profil.php?id=$link");
    					
	}}else{
	echo "<script>alert('E-mail veya şifre hatalı!');</script>";
	header("refresh:1;url=giris.php");}
	
	
?>