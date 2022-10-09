<?php 
session_start();
include("Connections/baglan.php");
$id=$_SESSION['musteriid'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$adres=$_POST['adres'];
$sifre=$_POST['sifre'];
$sifretekrar=$_POST['sifretekrar'];
$sifre = md5($sifre);
$sifretekrar = md5($sifretekrar);

if($sifre==$sifretekrar){

$sorgu=mysql_query("update musteri set ad='".$ad."', soyad='".$soyad."', mail='".$mail."', tel='".$tel."', adres='".$adres."',sifre='".$sifre."' where id=$id");
$sor = mysql_query("SELECT * FROM musteri where id='$id'")or die(mysql_error());
	while($yaz=mysql_fetch_array($sor))
	{
				
    if(isset($sorgu)){echo "<script>alert('Bilgileriniz başarıyla güncellenmiştir.');</script>";
	$link=$yaz['id'];
    header("refresh:1; url=profil.php?id=$link");
}
//
	else{echo "<script>alert('Şifreler Eşeleşmiyor');</script>";					
	header("refresh:1; url=profil.php?id=$link");}
	}
}

?>