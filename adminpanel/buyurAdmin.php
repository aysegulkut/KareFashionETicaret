<?php 
include("../Connections/baglan.php");
session_start();
$uyetanim = mysql_query("select * from kullanici");
$usr = $_POST['uname'];
$psw = $_POST['psw'];
$psw = md5($psw);
while ($uyeler = mysql_fetch_array($uyetanim)) {
    if ($uyeler['kullanici_adi'] == $usr && $uyeler['sifre']==$psw){
		$_SESSION['kullaniciAdi']= $uyeler['kullanici_adi'];
		$_SESSION['sifre']= $uyeler['sifre'];
		$_SESSION['kullaniciid']=$uyeler['kullanici_id'];	
		header("refresh:1;url=index_admin.php");
	}
	else{
		echo "<script>alert('Kullanıcı adı veya şifre hatalı')</script>";
		header("refresh:1;url=buyuradminForm.php");
	}

}

?>