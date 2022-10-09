<?php 
include("Connections/baglan.php");
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$mail=$_POST['mail'];
$telefonRegexPattern= '/0\([0-9]{3}\)-[0-9]{3}-[0-9]{2}-[0-9]{2}/';$tel=$_POST['tel'];
$adres=$_POST['adres'];
$sifre=$_POST['sifre'];
$sifretekrar=$_POST['sifretekrar'];
$sifre = md5($sifre);
$sifretekrar = md5($sifretekrar);

$maill=mysql_query("select * from musteri where mail='$mail'");
if(mysql_num_rows($maill)==0){
//echo preg_match($telefonRegexPattern);
//if(preg_match($telefonRegexPattern))
//{

if($sifre==$sifretekrar){
		 
$sorgu=mysql_query("INSERT INTO musteri (ad, soyad, mail,sifre,tel,adres) VALUES ('$ad','$soyad','$mail','$sifre','$tel','$adres')");
echo "<script>alert('Üyeliğiniz oluşturuldu. Giriş yapabilirsiniz.);</script>";    header("refresh:1; url=giris.php");

    if(isset($sorgu)){
	echo "<script>alert('Üyeliğiniz oluşturuldu. Giriş yapabilirsiniz.);</script>";    header("refresh:1; url=giris.php");
}else{
	echo "<script>alert('Üyelik oluşturulamadı.');</script>";					header("refresh:1; url=uyeolform.php");
	}

}else{echo "<script>alert('Şifreler Eşleşmiyor');</script>";					header("refresh:1; url=uyeolform.php");}
	/*}
else
{
     echo "<script>Geçerli Bir Telefon Numarası Giriniz.</script>";				 header("refresh:1; url=uyeolform.php");
}	*/

}else{
	echo "<script>E-mail adresiniz kayıtlıdır.</script>";						header("refresh:1; url=uyeolform.php");
	}
?>