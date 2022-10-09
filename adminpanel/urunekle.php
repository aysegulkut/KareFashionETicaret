<?php 
include("../Connections/baglan.php");
$ad=$_POST['urunad'];
$ozellik=$_POST['urunozellik'];
$fiyat=$_POST['urunfiyat'];
	if($_POST){//Form gönderildi mi?
		$table=mysql_query("select * from urun");
		$i=0;
		if ($_FILES["urunfoto1"]["size"]<1024*1024 && $_FILES["urunfoto2"]["size"]<1024*1024 && $_FILES["urunfoto3"]["size"]<1024*1024){
			if ($_FILES["urunfoto1"]["type"]=="image/jpeg" && $_FILES["urunfoto2"]["type"]=="image/jpeg" && $_FILES["urunfoto3"]["type"]=="image/jpeg"){//dosya tipi jpeg olsun
			
			$urunfoto1_dosyaadi=$_FILES["urunfoto1"]["name"];
			$urunfoto2_dosyaadi=$_FILES["urunfoto2"]["name"];
			$urunfoto3_dosyaadi=$_FILES["urunfoto3"]["name"];
			$uret=array("as","rt","ty","yu","fg");
			$uzanti=substr($urunfoto1_dosyaadi,-4,4);
			$uzanti2=substr($urunfoto2_dosyaadi,-4,4);
			$uzanti3=substr($urunfoto3_dosyaadi,-4,4);
			$sayi_tut=rand(1,10000);
			$sayi_tut2=rand(10001,20000);
			$sayi_tut3=rand(20001,30000);
			
			$yeniad="fotograflar/".$uret[rand(0,4)].$sayi_tut.$uzanti;
			$yeniad2="fotograflar/".$uret[rand(0,4)].$sayi_tut2.$uzanti2;
			$yeniad3="fotograflar/".$uret[rand(0,4)].$sayi_tut3.$uzanti3;
			//Dosya yeni adýyla dosyalar klasörüne kaydedilecek
				if (move_uploaded_file($_FILES["urunfoto1"]["tmp_name"],$yeniad)&& move_uploaded_file($_FILES["urunfoto2"]["tmp_name"],$yeniad2) && move_uploaded_file($_FILES["urunfoto3"]["tmp_name"],$yeniad3))  {
		$eklesorgu=mysql_query("INSERT INTO urun ( urun_ad, urun_ozellik, urun_fiyat, urun_foto1, urun_foto2, urun_foto3) VALUES ('$ad','$ozellik','$fiyat','$yeniad','$yeniad2','$yeniad3')");
				if($eklesorgu){
				   echo'<script>alert("Kayıt Başarılı.");</script>';
	header("refresh:1;url=urunekleform.php");
			   }else{
				   echo"<script >alert('Kayıt BAŞARISIZ');</script>";
				   header("refresh:1;url=urunekleform.php");
				   }
			}
			else{
				echo "<script>alert('Fotoğraf 1 yüklenemedi!');</script>";
				header("refresh:1;url=urunekleform.php");
			}
		}else{
			echo "<script>alert('Fotoğraf 1 yalnızca jpeg formatında olabilir!');</script>";
			header("refresh:1;url=urunekleform.php");
		}
	}else{			
		echo "<script>alert('Fotoğraf 1 boyutu 1 Mb  geçemez!');</script>";
		header("refresh:1;url=urunekleform.php");
	}
	}else{			
		echo "<script>alert('POST edilmedi');</script>";
	}

	
?>			