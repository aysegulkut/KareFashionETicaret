<?php
include("../Connections/baglan.php");
session_start();
$ad=$_POST['kullaniciAdi'];
$sifre=$_POST['sifre'];
$sifre2=$_POST['sifre2'];
$sifre = md5($sifre);
$sifre2 = md5($sifre2);
if($sifre==$sifre2){
$id=$_SESSION['id'];
$sorgu=mysql_query("update kullanici set kullanici_adi='".$ad."',sifre='".$sifre."' where kullanici_id=$id");
				
    if(isset($sorgu)){echo "<script>alert('Bilgileriniz başarıyla güncellenmiştir.');</script>";
    header("refresh:1; url=bilgilerimiguncelleform.php");$_SESSION['kullaniciAdi']=$ad; 
}
//
}
			else{echo"<script>alert('Şifreler Eşeleşmiyor');</script>";header("refresh:1; url=bilgilerimiguncelleform.php");}
?>