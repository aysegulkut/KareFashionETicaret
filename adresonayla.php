<?php 
session_start();
include("Connections/baglan.php");
$id=$_GET["id"];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tel=$_POST['tel'];
$adres=$_POST['adres'];
$sorgu=mysql_query("update musteri set ad='".$ad."', soyad='".$soyad."', tel='".$tel."', adres='".$adres."' where id=$id");
	$link=$id;
    header("refresh:1; url=odemesecenegi.php?id=$link");	
?>